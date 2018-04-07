<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'category1',
                'percentage' => '20.00',
                'event_id' => 1,
            ],
            [
                'category_name' => 'category2',
                'percentage' => '35.00',
                'event_id' => 1,
            ],
            [
                'category_name' => 'category3',
                'percentage' => '45.00',
                'event_id' => 1,
            ],
        ]);
    }
}
