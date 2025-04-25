<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticuloManufacturadoSeeder extends Seeder
{
    public function run()
    {
        ArticuloManufacturado::create([
            'denominacion' => 'Empanada de carne',
            'descripcion' => 'Empanada tradicional de carne cortada a cuchillo',
            'precio_venta' => 600,
            'precio_costo' => 300,
            'tiempo_estimado' => 15,
            'categoria_articulo_manufacturado_id' => 2 // otra categoría
        ]);
    }
}