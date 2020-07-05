<?php

use Illuminate\Database\Seeder;
use App\SupportTicket;
use Carbon\Carbon;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class SupportTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = '';
        $date = new Carbon( $time );
        $faker = Faker::create();
        $GuardianDevices = ['Laptop', 'Chromebook', 'Ipad', 'Smartphone'];
        $DistrictDevices = ['Laptop', 'Chromebook', 'Ipad', 'Smartphone'];
        $DeviceOwnership = ['Guardian Owned', 'District Owned'];
        $ConnectionType = ['Guardian Owned Hotspot','District Owned Hotspot','Guardian Owned Wireless','Public Wireless'];
        $Status = ['Open', 'Closed', 'Pending Parent', 'Pending Guardian'];
        $Schools = ['Henderson Ward Stewart','Armstrong Jr High','Overstreet','West', 'Starkville High'];
        $Tags = ['Google Classroom', 'Internet', 'Device'];


        foreach (range(1,100) as $index) {
            SupportTicket::Create([
                'Status' => $Status[rand(0,3)],
                'Tags' => $Tags[rand(0,2)],
                'user_id' => rand(0,3),
                'GuardianFirstName' => $faker->firstName,
                'GuardianLastName' => $faker->lastName,
                'StudentFirstName'  => $faker->firstName,
                'StudentLastName'  => $faker->lastName,
                'GuardianEmail'  => $faker->email,
                'GuardianPhone'  => $faker->phoneNumber,
                'GuardianDevice'  => $GuardianDevices[rand(0,3)],
                'StudentSchool'  => $Schools[rand(0,4)],
                'StudentGrade'  => rand(1,12),
                'DeviceOwnership'  => $DeviceOwnership[rand(0,1)],
                'SchoolDevice'  => $DistrictDevices[rand(0,3)],
                'ConnectionType'  => $ConnectionType[rand(0,3)],
                'IssueDescription'  => $faker->realText('200'),
                'updated_at' => $faker->dateTime(),
                'created_at' => $faker->dateTime()
        ]);
	}
    }
}
