<?php

namespace App\Http\Controllers;

use App\Models\DatoModel;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function listarDatos()
    {
        $datos = DatoModel::all();
        return response()->json(['Datos' => $datos]);
    }
}
