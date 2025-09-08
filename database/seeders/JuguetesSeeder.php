<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juguete;

class JuguetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juguetes = [
            // Niños
            ['nombre' => 'Carrito', 'genero' => 'niño', 'precio' => 120, 'imagen' => 'https://cdn1.coppel.com/images/catalog/mkp/7465/3000/74651109-1.jpg'],
            ['nombre' => 'Tren de madera', 'genero' => 'niño', 'precio' => 200, 'imagen' => 'https://www.calfuster.net/5124-thickbox_default/tren-london-de-madera-con-vagon-medidas-12x32x12-cm.jpg'],
            ['nombre' => 'Superhéroe', 'genero' => 'niño', 'precio' => 140, 'imagen' => 'https://m.media-amazon.com/images/I/41u477lYtwS.jpg'],
            ['nombre' => 'Patineta', 'genero' => 'niño', 'precio' => 220, 'imagen' => 'https://tse1.mm.bing.net/th/id/OIP.SFoDGZbuhWBRJ2aTpYVd0gHaHo?cb=thfc1&rs=1&pid=ImgDetMain'],
            ['nombre' => 'Robot', 'genero' => 'niño', 'precio' => 250, 'imagen' => 'https://i5.walmartimages.com/asr/6a47a76b-5f72-4a0c-88d3-9080d2d75119.f99199d585dfdd287b3ae20f1c6cfe2b.jpeg'],

            // Niñas
            ['nombre' => 'Muñeca', 'genero' => 'niña', 'precio' => 150, 'imagen' => 'muneca.jpg'],
            ['nombre' => 'Set de cocina', 'genero' => 'niña', 'precio' => 180, 'imagen' => 'cocina.jpg'],
            ['nombre' => 'Muñeca fashion', 'genero' => 'niña', 'precio' => 160, 'imagen' => 'muneca_fashion.jpg'],
            ['nombre' => 'Osito de peluche', 'genero' => 'niña', 'precio' => 110, 'imagen' => 'oso.jpg'],
            ['nombre' => 'Caballo de juguete', 'genero' => 'niña', 'precio' => 140, 'imagen' => 'caballo.jpg'],
        ];

        foreach ($juguetes as $juguete) {
            Juguete::create($juguete);
        }
    }
}
