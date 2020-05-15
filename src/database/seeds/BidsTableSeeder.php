<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([
            [
               'id_event' => '1',
               'name' => 'Сергей',
               'email' => 'google@gmail.com',
               'price' => '200'
            ],[
                'id_event' => '1',
                'name' => 'Владимир',
                'email' => 'google@gmail.com',
                'price' => '1000'
            ],[
                'id_event' => '3',
                'name' => 'Николай',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Василий',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Дмитрий',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Анатолий',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Андрей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '1',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '2',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '1',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ],[
                'id_event' => '3',
                'name' => 'Сергей',
                'email' => 'google@gmail.com',
                'price' => '200'
            ]
        ]);
    }
}
