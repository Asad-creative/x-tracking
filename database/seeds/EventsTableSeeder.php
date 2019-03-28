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
            ['id'=>1, 'text'=>'Event #1', 'start_date'=>'2019-04-05 08:00:00',
                'end_date'=>'2019-04-05 12:00:00'],
            ['id'=>2, 'text'=>'Event #2', 'start_date'=>'2019-04-06 15:00:00',
                'end_date'=>'2019-04-06 16:30:00'],
            ['id'=>3, 'text'=>'Event #3', 'start_date'=>'2019-04-04 00:00:00',
                'end_date'=>'2019-04-20 00:00:00'],
            ['id'=>4, 'text'=>'Event #4', 'start_date'=>'2019-04-01 08:00:00',
                'end_date'=>'2019-04-01 12:00:00'],
            ['id'=>5, 'text'=>'Event #5', 'start_date'=>'2019-04-20 08:00:00',
                'end_date'=>'2019-04-20 12:00:00'],
            ['id'=>6, 'text'=>'Event #6', 'start_date'=>'2019-04-25 08:00:00',
                'end_date'=>'2019-04-25 12:00:00']
       ]);
    }
}
