<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Portugal',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('countries')->insert($data);
    }
}
