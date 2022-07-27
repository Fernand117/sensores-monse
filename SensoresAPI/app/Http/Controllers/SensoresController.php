<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    public function listarSensores()
    {
        $sensores = SensorModel::all();
        return response()->json(['Datos' => $sensores]);
    }

    public function registrarSensor(Request $request)
    {
        $datos = $request->all();
        $sensor = new SensorModel();
        $sensor->nombre = $datos['nombre'];
        $sensor->save();
        return response()->json(['Mensaje' => 'Sensor registrado correctamente']);
    }

    public function editarSensor(Request $request)
    {
        $datos = $request->all();
        $sensor = SensorModel::find($datos['id']);
        $sensor->nombre = $datos['nombre'];
        $sensor->update();
        return response()->json(['Mensaje' => 'Sensor actualizado correctamente']);
    }

    public function eliminarSensor(Request $request)
    {
        $datos = $request->all();
        $sensor = SensorModel::find($datos['id']);
        $sensor->delete();
        return response()->json(['Mensaje' => 'Sensor eliminado correctamente']);
    }
}
