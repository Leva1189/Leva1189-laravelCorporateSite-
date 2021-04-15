<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(FiltersSeeder::class);
        $this->call(MenusSeeder::class);
        $this->call(PortfoliosSeeder::class);
        $this->call(SlidersSeeder::class);
    }
}
