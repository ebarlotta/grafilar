<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lados')->insert(['lados'=>'Simple Faz','factor'=>1,'activo'=>true]);
        DB::table('lados')->insert(['lados'=>'Doble Faz','factor'=>1.5,'activo'=>true]);
    }
}
