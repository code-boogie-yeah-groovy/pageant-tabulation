<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'event_name' => 'test_event',
            'user_id' => 1,
            'event_date' => '2018-12-12',
        ]);
    }
}
