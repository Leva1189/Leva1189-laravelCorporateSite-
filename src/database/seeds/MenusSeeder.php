<?php

use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            [
                'title'=>'Главная',
                'path'=>'http://corporate.local:82'
            ],
            [
                'title'=>'Блог',
                'path'=>'http://corporate.local:82/articles'
            ],
            [
                'title'=>'Компьютеры',
                'path'=>'http://corporate.local:82/articles/cat/computers'
            ],
            [
                'title'=>'Интересное',
                'path'=>'http://corporate.local:82/articles/cat/iteresting'
            ],
            [
                'title'=>'Советы',
                'path'=>'http://corporate.local:82/articles/cat/soveti'
            ],
            [
                'title'=>'Портфолио',
                'path'=>'http://corporate.local:82/portfolios'
            ],
            [
                'title'=>'Контакты',
                'path'=>'http://corporate.local:82/contacts'
            ]

        ]);
    }
}
