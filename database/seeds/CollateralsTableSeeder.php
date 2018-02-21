<?php

use Illuminate\Database\Seeder;
use App\Models\Collateral;

class CollateralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collaterals = [
            ['name' => 'House'],
            ['name' => 'Car'],
            ['name' => 'Land'],
            ['name' => 'Estate'],
            ['name' => 'Life'],
            ['name' => 'Girlfriend'],
        ];

        foreach ($collaterals as $key => $collateral)
            Collateral::create($collateral);
    }
}
