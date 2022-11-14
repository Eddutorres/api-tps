<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculos')->insert([
            'patente' => "RBLS24",
            'rut_persona' => "13991880-0",
        ]);
        DB::table('vehiculos')->insert([
            'patente' => "CXLJ15",
            'rut_persona' => "13991880-0",
        ]);
        DB::table('vehiculos')->insert([
            'patente' => "HU5678",
            'rut_persona' => "13765901-1",
        ]);
        DB::table('vehiculos')->insert([
            'patente' => "GBHY78",
            'rut_persona' => "13765901-1",
        ]);
    }
}
