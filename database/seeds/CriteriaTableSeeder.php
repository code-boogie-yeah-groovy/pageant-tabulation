<?php

use Illuminate\Database\Seeder;

class CriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'criteria_name' => 'criteria1',
                'percentage' => 50,
                'category_id' => 2,
            ],
            [
                'criteria_name' => 'criteria2',
                'percentage' => 50,
                'category_id' => 2,
            ],
            [
                'criteria_name' => 'criteria3',
                'percentage' => 30,
                'category_id' => 3,
            ],
            [
                'criteria_name' => 'criteria4',
                'percentage' => 40,
                'category_id' => 3,
            ],
            [
                'criteria_name' => 'criteria5',
                'percentage' => 30,
                'category_id' => 3,
            ],
        ]);
    }
}
