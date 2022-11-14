<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstacionamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estacionamientos')->insert([
            'codigo' => "V01",
            'sector' => "Varas",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "V02",
            'sector' => "Varas",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "V03",
            'sector' => "Varas",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "V04",
            'sector' => "Varas",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "P01",
            'sector' => "Prat",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "P02",
            'sector' => "Prat",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "P03",
            'sector' => "Prat",
        ]);
        DB::table('estacionamientos')->insert([
            'codigo' => "P04",
            'sector' => "Prat",
        ]);
    }
}
