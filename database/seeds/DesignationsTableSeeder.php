<?php

use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desginations = [
            ['name' => 'Director'],
            ['name' => 'Owner'],
            ['name' => 'Partner'],
        ];

        foreach ($desginations as $key => $desgination)
            Designation::create($desginations);
    }
}
