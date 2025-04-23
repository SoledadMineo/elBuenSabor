<?php

namespace App\Http\Controllers;

use App\Models\ArticuloManufacturado;
use Illuminate\Http\Request;

class ArticuloManufacturadoController extends Controller
{
    public function store(Request $request)
    {
        // Datos hardcodeados por ahora para probar
        $nuevoArticulo = new ArticuloManufacturado();
        $nuevoArticulo->denominacion = 'Pizza Margherita';
        $nuevoArticulo->descripcion = 'Pizza clásica con tomate, mozzarella y albahaca';
        $nuevoArticulo->precio_venta = 7500;
        $nuevoArticulo->precio_costo = 4000;
        $nuevoArticulo->tiempo_estimado = 20;
        $nuevoArticulo->id_categoriaArticuloManufacturado = 1;
        $nuevoArticulo->save();

        return response()->json([
            'message' => 'Artículo manufacturado creado con éxito',
            'articulo' => $nuevoArticulo
        ], 201);
    }
}
