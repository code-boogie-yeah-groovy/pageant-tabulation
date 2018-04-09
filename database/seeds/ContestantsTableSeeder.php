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
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant2',
                'contestant_no' => 2,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant3',
                'contestant_no' => 3,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant4',
                'contestant_no' => 4,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant5',
                'contestant_no' => 5,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant6',
                'contestant_no' => 6,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant7',
                'contestant_no' => 7,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant8',
                'contestant_no' => 8,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant9',
                'contestant_no' => 9,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant10',
                'contestant_no' => 10,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant11',
                'contestant_no' => 11,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant12',
                'contestant_no' => 12,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant13',
                'contestant_no' => 13,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant14',
                'contestant_no' => 14,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant15',
                'contestant_no' => 15,
                'mister' => false,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant1',
                'contestant_no' => 1,
                'mister' => true,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant2',
                'contestant_no' => 2,
                'mister' => true,
                'event_id' => 1,
            ],
            [
                'contestant_name' => 'contestant3',
                'contestant_no' => 3,
                'mister' => true,
                'event_id' => 1,
            ],
        ]);
    }
}
