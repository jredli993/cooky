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
        DB::table('categories')->insert([
            'name' => 'Appetizers & Snacks',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cake Recipes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Cocktail Recipes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Main Dishes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pasta Salad Recipes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Smoothie Recipes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sandwiches'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pizza'
        ]);
    }
}
