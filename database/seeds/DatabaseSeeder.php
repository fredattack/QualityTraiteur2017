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
//        $this->call(SaladesTableSeeder::class);
//        $this->call(IngredientsTableSeeder::class);
        $this->call(SaladeIngredientTableSeeder::class);
    }
}