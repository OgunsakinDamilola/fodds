<?php

use Illuminate\Database\Seeder;
use App\Models\IdentityType;

class IdentityTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identity_types = [
            ['name' => 'Voter\'s Card'],
            ['name' => 'National ID'],
            ['name' => 'International Passport'],
            ['name' => 'Driver\'s License'],
        ];

        foreach ($identity_types as $key => $identity_type)
            IdentityType::create($identity_type);
    }
}
