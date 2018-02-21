<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('name', '=', 'admin')->first();

        $receptionist_role = Role::where('name', '=', 'receptionist')->first();

        $accountant_role = Role::where('name', '=', 'accountant')->first();

        $hod_role = Role::where('name', '=', 'hod')->first();

        $supervisor_role = Role::where('name', '=', 'supervisor')->first();

        $customer_role = Role::where('name', '=', 'customer')->first();

        $admin = User::create([
           'email'=>'admin@fodds.com',
            'password'=> bcrypt('admin')
        ]);

        $receptionist = User::create([
           'email'=>'receptionist@fodds.com',
            'password'=> bcrypt('receptionist')
        ]);

        $accountant = User::create([
           'email'=>'accountant@fodds.com',
            'password'=> bcrypt('accountant')
        ]);

        $hod = User::create([
           'email'=>'hod@fodds.com',
            'password'=> bcrypt('hod')
        ]);

        $supervisor = User::create([
           'email'=>'supervisor@fodds.com',
            'password'=> bcrypt('supervisor')
        ]);

        $customer = User::create([
           'email'=>'customer@fodds.com',
            'password'=> bcrypt('customer')
        ]);

        $admin->attachRole($admin_role);
        $receptionist->attachRole($receptionist_role);
        $accountant->attachRole($accountant_role);
        $hod->attachRole($hod_role);
        $supervisor->attachRole($supervisor_role);
        $customer->attachRole($customer_role);

    }
}
