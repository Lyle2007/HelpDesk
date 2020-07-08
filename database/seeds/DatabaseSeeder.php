<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            StatesTableSeeder::class,
            PermissionsDemoSeeder::class,
            SupportTicketSeeder::class,
            AssignRoleSeeder::class
        ]);
    }
}
