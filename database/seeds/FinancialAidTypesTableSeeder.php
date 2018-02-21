<?php

use Illuminate\Database\Seeder;
use App\Models\FinancialAidType;

class FinancialAidTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $financial_aid_types = [
            ['name' => 'Individuals'],
            ['name' => 'Cooperate']
        ];

        foreach ($financial_aid_types as $key => $type)
            FinancialAidType::create($type);
    }
}
