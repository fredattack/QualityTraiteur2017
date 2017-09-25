<?php

use Illuminate\Database\Seeder;

class SaladeIngredientTableSeeder extends Seeder {

    public function run()
    {

        for($i = 1; $i <= 100; ++$i)
        {
            $numbers = range(1, 20);
            shuffle($numbers);
            $t= rand(16,30);
            $n = rand(21,30);
            for($j = 1; $j < $n; ++$j)
            {
                DB::table('salade_ingredient')->insert(array(
                    'salade_id' => $t,
                    'ingredient_id' => $n
                ));
            }
        }
    }
}