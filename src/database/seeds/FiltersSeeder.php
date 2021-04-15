<?php

use Illuminate\Database\Seeder;

class FiltersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('filters')->insert([
            [
                'title'=>'Brand Identity',
                'alias'=>'brand-identity'
            ]
        ]);
    }
}
