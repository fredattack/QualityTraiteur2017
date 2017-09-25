
<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    public function run()
    {
    DB::table('ingredients')->delete();

        for ($i = 0;$i < 10;++$i)
        {
        DB::table('ingredients')->insert(['nom' => 'Nom' . $i]);
        }
    }
}