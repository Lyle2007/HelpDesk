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
            //TICKETS
                Permission::create(['name' => 'create ticket']);
                Permission::create(['name' => 'view own tickets']);
                Permission::create(['name' => 'view all tickets']);
                Permission::create(['name' => 'edit ticket']);
                Permission::create(['name' => 'delete ticket']); //Only Soft Deletes
                Permission::create(['name' => 'comment on other tickets']);
                Permission::create(['name' => 'change ticket status']);
                Permission::create(['name' => 'assign tickets']);

        //ROLES
            // WEBMASTER
            $role0 = Role::create(['name' => 'Webmaster']);

            // ADMIN
            $role1 = Role::create(['name' => 'Admin']);

            // CURRICULUM TECH SPEC.
            $role2 = Role::create(['name' => 'Curriculum Technology Specialist']);

            // GUARDIAN
            $role0 = Role::create(['name' => 'Guardian']);

            // GUEST
            $role4 = Role::create(['name' => 'Guest']);



    }
}
