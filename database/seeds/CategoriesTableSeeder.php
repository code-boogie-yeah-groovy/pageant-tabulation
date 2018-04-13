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
                'category_name' => 'Casual',
                'percentage' => '20.00',
                'event_id' => 1,
            ],
            [
                'category_name' => 'Talent',
                'percentage' => '35.00',
                'event_id' => 1,
            ],
            [
                'category_name' => 'Q&A',
                'percentage' => '45.00',
                'event_id' => 1,
            ],
        ]);
    }
}
