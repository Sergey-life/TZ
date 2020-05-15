<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'caption' => 'GREEN GREY'
            ],[
                'caption' => 'ВАЛЕРИЙ МЕЛАДЗЕ'
            ],[
                'caption' => 'ДЖАЗ НА ВЕРТОЛЕТНОЙ ПЛОЩАДКЕ'
            ],[
                'caption' => 'POMPEYA'
            ],[
                'caption' => 'STING MY SONGS'
            ]
        ]);
    }
}
