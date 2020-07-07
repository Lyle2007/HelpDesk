<?php

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lyle MeCaskey',
            'email' => 'Lylemecaskey3@gmail.com',
            'password' => bcrypt('password')
        ]);

    }
}
