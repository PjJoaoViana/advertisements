<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
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
                'name' => 'Paredes de Coura',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('counties')->insert($data);
    }
}
