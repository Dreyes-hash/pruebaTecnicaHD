<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juguete;

class JuguetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Juguete::create(['nombre' => 'Carrito', 'genero' => 'niño', 'precio' => 120, 'imagen' => 'carrito.jpg']);
        Juguete::create(['nombre' => 'Muñeca', 'genero' => 'niña', 'precio' => 150, 'imagen' => 'muneca.jpg']);
        Juguete::create(['nombre' => 'Bloques', 'genero' => 'unisex', 'precio' => 80, 'imagen' => 'bloques.jpg']);
    }
}
