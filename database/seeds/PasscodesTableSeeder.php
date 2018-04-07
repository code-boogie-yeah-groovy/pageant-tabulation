<?php

use Illuminate\Database\Seeder;

class PasscodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passcodes')->insert([
            [
                'code' => 'code1',
                'judge_name' => 'judge1',
                'event_id' => 1,
            ],
            [
                'code' => 'code2',
                'judge_name' => 'judge2',
                'event_id' => 1,
            ],
            [
                'code' => 'code3',
                'judge_name' => 'judge3',
                'event_id' => 1,
            ],
        ]);
    }
}
