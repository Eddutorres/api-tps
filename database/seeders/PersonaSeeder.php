<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personas')->insert([
            'rut' => "13991880-0",
            'nombre1' => "Eduardo",
            'nombre2' => "Andres",
            'apellido1' => "Torres",
            'apellido2' => "Torres",
            'telefono' => "12345678",
            'email' => "ed.torres@duocuc.cl",
            'empresa' => "Tpsv"
        ]);

        DB::table('personas')->insert([
            'rut' => "13765901-1",
            'nombre1' => "Paula",
            'nombre2' => "Mariana",
            'apellido1' => "Olivares",
            'apellido2' => "Ruiz",
            'telefono' => "12345645",
            'email' => "paula@mail.cl",
            'empresa' => "Ultraport"
        ]);
    }
}
