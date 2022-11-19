<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargos;

class CargosController extends Controller
{

     public function store(Request $request)
    {
        // Validate the request...
 
        $Cargo = new Cargos;
 
        $Cargo->nombre = $request->nombre;
        $Cargo->descripcion = $request->descripcion;
 
 
        $Cargo->save();
    }
}
