<?php

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['name' => 'Mr'],
            ['name' => 'Mrs'],
            ['name' => 'Ms'],
            ['name' => 'Master'],
            ['name' => 'Miss'],
        ];

        foreach ($titles as $key => $title)
            Title::create($title);
    }
}
