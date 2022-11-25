<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('registros')->insert([
            'fecha' => "2022-11-13",
            'codigo_est' => "P01",
            'estado_est' => "1",
            'hora_ingreso' => "23:00",
            'rut' => "13991880-0",
            'Patente' => "RBLS24",
        ]);
        DB::table('registros')->insert([
            'fecha' => "2022-11-13",
            'codigo_est' => "P02",
            'estado_est' => "1",
            'hora_ingreso' => "23:01",
            'rut' => "13991880-0",
            'Patente' => "CXLJ15",
        ]);
        DB::table('registros')->insert([
            'fecha' => "2022-11-13",
            'codigo_est' => "V01",
            'estado_est' => "1",
            'hora_ingreso' => "23:02",
            'rut' => "13765961-1",
            'Patente' => "HU5678",
        ]);
        DB::table('registros')->insert([
            'fecha' => "2022-11-13",
            'codigo_est' => "V02",
            'estado_est' => "1",
            'hora_ingreso' => "23:03",
            'rut' => "13765961-1",
            'Patente' => "GBHY78",
        ]);

    }
}
