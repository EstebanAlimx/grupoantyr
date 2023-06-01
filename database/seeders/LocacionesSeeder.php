<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Nombre, descripción, Municipio
        DB::table('locaciones')->insert([
            'nombre' => Str::random(100),
            'descripcion' => Str::random(100),
            'municipio' => Str::random(100)
        ]);
    }
}
