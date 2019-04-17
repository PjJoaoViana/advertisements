<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(DistrictsTableSeeder::class);
         $this->call(CountiesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(SubCategoriesTableSeeder::class);
         $this->call(AdvertisementsTableSeeder::class);
    }
}
