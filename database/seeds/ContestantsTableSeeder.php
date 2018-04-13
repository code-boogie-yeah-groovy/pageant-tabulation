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
                'contestant_name' => 'Meriam',
                'contestant_no' => 1,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Dangie',
                'contestant_no' => 2,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Kat',
                'contestant_no' => 3,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Ody',
                'contestant_no' => 3,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Roland',
                'contestant_no' => 1,
                'mister' => true,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Emman',
                'contestant_no' => 2,
                'mister' => true,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'Harvey',
                'contestant_no' => 3,
                'mister' => true,
                'event_id' => 1,
            ],
        ]);
    }
}
