<?php


use Illuminate\Database\Seeder;

class SaladesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('salades')->delete();

        for ($i = 0; $i < 15; ++$i) {
            DB::table('salades')->insert(array('nom' => 'Nom' . $i,
                                        'prix' => rand(7, 12)));
        }

    }
}
