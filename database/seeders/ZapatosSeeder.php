<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zapato;

class ZapatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zapato = new Zapato();
        $zapato->marca = "Nike";
        $zapato->modelo = "Air Max";
        $zapato->tipoZapato = "Deportivo";
        $zapato->Talla = "42";
        $zapato->estilo = "Running";
        $zapato->color = "Negro";
        $zapato->precio = 129.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/calzado-air-max-excee-psfV5R.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Adidas";
        $zapato->modelo = "Stan Smith";
        $zapato->tipoZapato = "Urbano";
        $zapato->Talla = "39";
        $zapato->estilo = "Casual";
        $zapato->color = "Blanco";
        $zapato->precio = 79.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/calzado-air-max-excee-psfV5R.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Puma";
        $zapato->modelo = "RS-X";
        $zapato->tipoZapato = "Deportivo";
        $zapato->Talla = "44";
        $zapato->estilo = "Retro";
        $zapato->color = "Azul";
        $zapato->precio = 89.99;
        $zapato->stock = 20;
        $zapato->imagen = 'https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/$_58.png';
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Converse";
        $zapato->modelo = "RChuck Taylor";
        $zapato->tipoZapato = "Casual";
        $zapato->Talla = "38";
        $zapato->estilo = "Clásico";
        $zapato->color = "Rojo";
        $zapato->precio = 59.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/130-1.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Reebok";
        $zapato->modelo = "Classic Leather";
        $zapato->tipoZapato = "Urbano";
        $zapato->Talla = "40";
        $zapato->estilo = "Vintage";
        $zapato->color = "Blanco";
        $zapato->precio = 69.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/64ba04dbf365b_ar0457.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Vans";
        $zapato->modelo = "Old Skoo";
        $zapato->tipoZapato = "Skate";
        $zapato->Talla = "41";
        $zapato->estilo = "Retro";
        $zapato->color = "Blanco";
        $zapato->precio = 64.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/VN0A5JMJY52.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Vans";
        $zapato->modelo = "Old Skoo";
        $zapato->tipoZapato = "Skate";
        $zapato->Talla = "41";
        $zapato->estilo = "Retro";
        $zapato->color = "Rojo";
        $zapato->precio = 64.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/VN0A5JMJY52.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "New Balance";
        $zapato->modelo = "990";
        $zapato->tipoZapato = "Running";
        $zapato->Talla = "49";
        $zapato->estilo = "Moderno";
        $zapato->color = "Gris";
        $zapato->precio = 64.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/990.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Skechers";
        $zapato->modelo = "Go Walk";
        $zapato->tipoZapato = "Deportivo";
        $zapato->Talla = "37";
        $zapato->estilo = "Caminata";
        $zapato->color = "Azul Marino";
        $zapato->precio = 54.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/cut-paste-photos2022_03_17_06_31_10.png";
        $zapato->save();

        $zapato = new Zapato();
        $zapato->marca = "Fila";
        $zapato->modelo = "Disruptor";
        $zapato->tipoZapato = "Urbano";
        $zapato->Talla = "38";
        $zapato->estilo = "Chunky";
        $zapato->color = "Azul Marino";
        $zapato->precio = 74.99;
        $zapato->stock = 20;
        $zapato->imagen = "https://bantolin.nyc3.digitaloceanspaces.com/Zapatos/fila.png";
        $zapato->save();
    }
}
