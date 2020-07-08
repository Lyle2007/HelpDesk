<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $lyle = DB::table('User')->where('email', '=', 'Lylemecaskey3@gmail.com')->get();
       $lyle->assignRole('Webmaster');
    }
}
