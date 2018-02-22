<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Profile::create([
            'user_id'=>'1',
            'first_name'=> 'Fodds',
            'last_name'=> 'Admin',
            'middle_name'=> 'Admin',
            'phone'=> '080FODDS'
        ]);

        $receptionist = Profile::create([
            'user_id'=>'2',
            'first_name'=> 'Fodds',
            'last_name'=> 'Receptionist',
            'middle_name'=> 'Receptionist',
            'phone'=> '080FODDS'
        ]);

        $accountant = Profile::create([
            'user_id'=>'3',
            'first_name'=> 'Fodds',
            'last_name'=> 'Accountant',
            'middle_name'=> 'Accountant',
            'phone'=> '080FODDS'
        ]);

        $hod = Profile::create([
            'user_id'=>'4',
            'first_name'=> 'Fodds',
            'last_name'=> 'Hod',
            'middle_name'=> 'Hod',
            'phone'=> '080FODDS'
        ]);

        $supervisor = Profile::create([
            'user_id'=>'5',
            'first_name'=> 'Fodds',
            'last_name'=> 'Supervisor',
            'middle_name'=> 'Supervisor',
            'phone'=> '080FODDS'
        ]);

        $customer = Profile::create([
            'user_id'=>'6',
            'first_name'=> 'Fodds',
            'last_name'=> 'Customer',
            'middle_name'=> 'Customer',
            'phone'=> '080FODDS'
        ]);
    }
}
