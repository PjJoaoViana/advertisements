<?php

use Illuminate\Database\Seeder;

class CategoriesSubCategoriesTableSeeder extends Seeder
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
                'id_category' => 1,
                'id_sub_category' => 1
            ],
            [
                'id' => 2,
                'id_category' => 2,
                'id_sub_category' => 1
            ],
            [
                'id' => 3,
                'id_category' => 3,
                'id_sub_category' => 1
            ],
            [
                'id' => 4,
                'id_category' => 1,
                'id_sub_category' => 2
            ],
            [
                'id' => 5,
                'id_category' => 2,
                'id_sub_category' => 2
            ],
            [
                'id' => 6,
                'id_category' => 3,
                'id_sub_category' => 2
            ],
        ];

        DB::table('categories_sub_categories')->insert($data);
    }
}
