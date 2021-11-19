<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'nombre'=> 'Air Lift Performance',
            'autor' => 'Jorge Zapata',
        ]);

         DB::table('libro')->insert([
            'nombre'=> 'Accu Air',
            'autor' => 'Jorge Zapata',
        ]);
    }
}
