<?php

use Illuminate\Database\Seeder;

class ContestantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contestants')->insert([
            [
                'contestant_name' => 'contestant1',
                'contestant_no' => 1,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant2',
                'contestant_no' => 2,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant3',
                'contestant_no' => 3,
                'event_id' => 1,
            ],
        ]);
    }
}
