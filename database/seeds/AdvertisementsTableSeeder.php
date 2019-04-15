<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
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
                'title' => 'Add Title 1',
                'description' => 'Description Title 1',
                'price' => 30.22,
                'phone' => '9655208941',
                'image' => '/test/img.jpg',
                'id_category_sub_category' => 1,
                'id_county' => 1,
                'id_user' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('advertisements')->insert($data);
    }
}
