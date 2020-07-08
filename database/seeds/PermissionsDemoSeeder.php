<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // PERMISSIONS
            //SITE ACCESS
                Permission::create(['name' => 'view ticket dashboard']);
                Permission::create(['name' => 'view permission dashboard']);
            //TICKETS-GENERAL
                Permission::create(['name' => 'create ticket']);
                Permission::create(['name' => 'view own tickets']);
                Permission::create(['name' => 'edit ticket']);
                Permission::create(['name' => 'delete ticket']);
            //TICKETS-AGENT
                Permission::create(['name' => 'comment on tickets other than own']);
                Permission::create(['name' => 'change ticket status']);
                Permission::create(['name' => 'assign tickets']);
            //TICKET-COMMENTS
                // Commenting on the users own tickets
                Permission::create(['name' => 'create comments']);
                Permission::create(['name' => 'view comments']);
                Permission::create(['name' => 'edit comments']);
                Permission::create(['name' => 'delete comments']);

        //ROLES
            // WEBMASTER
            $role0 = Role::create(['name' => 'Webmaster']);
                //SITE ACCESS
                $role0->givePermissionTo(['view ticket dashboard','view permission dashboard']);
                //TICKET-GENERAL
                $role0->givePermissionTo(['create ticket','view own tickets','edit ticket','delete ticket']);
                //TICKET-AGENT
                $role0->givePermissionTo(['comment on tickets other than own','change ticket status','assign tickets']);
                //TICKET-COMMENTS
                $role0->givePermissionTo(['create comments', 'view comments', 'edit comments', 'delete comments']);

            // ADMIN
            $role1 = Role::create(['name' => 'Admin']);
                //SITE ACCESS
                $role1->givePermissionTo(['view ticket dashboard','view permission dashboard']);
                //TICKET-GENERAL
                $role1->givePermissionTo(['create ticket','view own tickets','edit ticket','delete ticket']);
                //TICKET-AGENT
                $role1->givePermissionTo(['comment on tickets other than own','change ticket status','assign tickets']);
                //TICKET-COMMENTS
                $role1->givePermissionTo(['create comments', 'view comments', 'edit comments', 'delete comments']);

            // CURRICULUM TECH SPEC.
            $role2 = Role::create(['name' => 'Curriculum Technology Specialist']);
                //SITE ACCESS
                $role2->givePermissionTo(['view ticket dashboard','view permission dashboard']);
                //TICKET-GENERAL
                $role2->givePermissionTo(['create ticket','view own tickets','edit ticket','delete ticket']);
                //TICKET-AGENT
                $role2->givePermissionTo(['comment on tickets other than own','change ticket status','assign tickets']);
                //TICKET-COMMENTS
                $role2->givePermissionTo(['create comments', 'view comments', 'edit comments', 'delete comments']);

            // GUARDIAN
            $role0 = Role::create(['name' => 'Guardian']);
                //SITE ACCESS
                //TICKET-GENERAL
                $role0->givePermissionTo(['create ticket','view own tickets','edit ticket']);
                //TICKET-AGENT
                //TICKET-COMMENTS
                $role0->givePermissionTo(['create comments', 'view comments', 'edit comments']);

            // GUEST
            $role4 = Role::create(['name' => 'Guest']);
                //TICKET-GENERAL
                $role4->givePermissionTo(['create ticket']);
    }
}
