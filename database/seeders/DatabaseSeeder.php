<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(EstadoSeeder::class);
        $this->call(TipodocumentoSeeder::class);
        $this->call(SistemaImpresionSeeder::class);
        $this->call(LadoSeeder::class);
        $this->call(PapelSeeder::class);

        Cliente::factory()->count(13)->make();
    }

}
