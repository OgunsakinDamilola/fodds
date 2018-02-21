<?php

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            ['name' => 'Access Bank'],
            ['name' => 'Citibank'],
            ['name' => 'Diamond Bank'],
            ['name' => 'Dynamic Standard Bank'],
            ['name' => 'Ecobank Nigeria'],
            ['name' => 'Fidelity Bank Nigeria'],
            ['name' => 'First Bank of Nigeria'],
            ['name' => 'First City Monument Bank'],
            ['name' => 'Guaranty Trust Bank'],
            ['name' => 'Heritage Bank Plc'],
            ['name' => 'Keystone Bank Limited'],
            ['name' => 'Providus Bank Plc'],
            ['name' => 'Skye Bank'],
            ['name' => 'Stanbic IBTC Bank Nigeria Limited'],
            ['name' => 'Standard Chartered Bank'],
            ['name' => 'Sterling Bank'],
            ['name' => 'Suntrust Bank Nigeria Limited'],
            ['name' => 'Union Bank of Nigeria'],
            ['name' => 'United Bank for Africa'],
            ['name' => 'Unity Bank Plc'],
            ['name' => 'Wema Bank'],
            ['name' => 'Zenith Bank']
        ];

        foreach ($banks as $key => $bank)
            Bank::create($bank);
    }
}
