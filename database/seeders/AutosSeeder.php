<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class AutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Marca, Modelo, Tipo (Camioneta, Auto)
        DB::table('autos')->insert([
            'marca' => Str::random(50),
            'modelo' => Str::random(50),
            'tipo' => Str::random(10)
        ]);
    }
}
