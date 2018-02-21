<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'=>'admin',
                'display_name'=>'Admin',
                'description'=>'The owner of the project',
            ],
            [
                'name'=>'receptionist',
                'display_name'=>'Receptionist',
                'description'=>'Handle adding customers and creating financial aids',
            ],
            [
                'name'=>'accountant',
                'display_name'=>'Accountant',
                'description'=>'Deals with the money of the company',
            ],
            [
                'name'=>'hod',
                'display_name'=>'HOD',
                'description'=>'Handle approval of financial aids',
            ],
            [
                'name'=>'supervisor',
                'display_name'=>'Supervisor',
                'description'=>'Handles final approval or financial aids',
            ],
            [
                'name'=>'customer',
                'display_name'=>'Customer',
                'description'=>'Applies for financial aid',
            ]
        ];

        foreach ($roles as $key => $role)
            Role::create($role);
    }
}
