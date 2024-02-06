<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $articoli = \App\Models\Articolo::factory(100)->create();

        foreach ($articoli as $articolo) {
            \App\Models\Movimento::factory(10)->create([
                'codice' => $articolo->codice
            ]);
        }

        \App\Models\User::factory()->create(['username' => 'Luca', 'password' => '1234']);
        \App\Models\User::factory()->create(['username' => 'Massimo', 'password' => '1234']);
        \App\Models\User::factory()->create(['username' => 'Alessandro', 'password' => '1234']);
    }
}
