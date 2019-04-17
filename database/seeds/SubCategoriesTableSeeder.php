<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
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
                'name' => 'Cars',
                'created_at' => now(),
                'updated_at' => now(),
                'id_category' => 1
            ],
            [
                'id' => 2,
                'name' => 'Toys',
                'created_at' => now(),
                'updated_at' => now(),
                'id_category' => 2
            ],
            [
                'id' => 3,
                'name' => 'Sci-fi',
                'created_at' => now(),
                'updated_at' => now(),
                'id_category' => 3
            ]
        ];

        DB::table('sub_categories')->insert($data);
    }
}
