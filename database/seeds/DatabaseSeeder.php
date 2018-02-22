<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BanksTableSeeder::class);
         $this->call(CollateralsTableSeeder::class);
         $this->call(DesignationsTableSeeder::class);
         $this->call(FinancialAidTypesTableSeeder::class);
         $this->call(IdentityTypesTableSeeder::class);
         $this->call(TitlesTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProfilesTableSeeder::class);
    }
}
