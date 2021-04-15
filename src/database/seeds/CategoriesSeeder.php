<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'title'=>'Блог',
                'alias'=>'blog',
                'parent_id'=>'0'
            ],
            [
                'title'=>'Компьютеры',
                'alias'=>'computers',
                'parent_id'=>'0'
            ],
            [
                'title'=>'Интересное',
                'alias'=>'iteresting',
                'parent_id'=>'0'
            ],
            [
                'title'=>'Советы',
                'alias'=>'soveti',
                'parent_id'=>'0'
            ],
        ]);
    }
}
