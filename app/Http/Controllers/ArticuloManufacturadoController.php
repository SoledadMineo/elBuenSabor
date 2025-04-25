<?php

namespace App\Http\Controllers;

use App\Models\ArticuloManufacturado;
use Illuminate\Http\Request;

class ArticuloManufacturadoController extends Controller
{

    public function crearArticuloConIngredientes()
    {
        $articulo = ArticuloManufacturado::create([
            'denominacion' => 'Pizza napolitana',
            'descripcion' => 'Pizza con tomate natural, mozzarella, ajo y orégano',
            'precio_venta' => 3200,
            'precio_costo' => 1800,
            'tiempo_estimado' => 25,
            'categoria_articulo_manufacturado_id' => 1, 
        ]);

        ArticuloManufacturadoDetalle::create([
            'cantidad' => 1, 
            'articulo_manufacturado_id' => $articulo->id,
            'articulo_insumo_id' => 1, 
        ]);

        ArticuloManufacturadoDetalle::create([
            'cantidad' => 2, 
            'articulo_manufacturado_id' => $articulo->id,
            'articulo_insumo_id' => 2,
        ]);

        return response()->json(['mensaje' => 'Artículo manufacturado creado con sus ingredientes'], 201);
    }

    
}
