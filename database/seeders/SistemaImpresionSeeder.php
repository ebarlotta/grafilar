<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SistemaImpresionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sistema_impresions')->insert(['sistema'=>'Laser B/N','factor'=>1,'activo'=>true]);
        DB::table('sistema_impresions')->insert(['sistema'=>'Laser Color','factor'=>1.5,'activo'=>true]);
        DB::table('sistema_impresions')->insert(['sistema'=>'Tinta B/N','factor'=>1,'activo'=>true]);
        DB::table('sistema_impresions')->insert(['sistema'=>'Tinta Color','factor'=>1.5,'activo'=>true]);
    }
}
