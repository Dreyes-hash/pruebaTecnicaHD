<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    // llamar a los seeders para poblar la base de datos
    public function run(): void
    {
        $this->call(JuguetesSeeder::class);
    }
}
