<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
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
                'name' => 'Viana do Castelo',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('districts')->insert($data);
    }
}
