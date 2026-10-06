<?php

namespace App\Http\Controllers;

use App\Models\registro;
use App\Models\Sensor;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class RegistroController extends Controller
{
    public function store(Request $request){
        $sensor = Sensor::Where('codigo', $request->cod_sensor)->first();

        if(!$sensor){
            return response()->json(['error' => 'sensor não encontrado']);
        }

        $registro = registro::create([
            'sensor_id' => $sensor->id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'date_hora' => now(),
        ]);

        return response()->json([
            'success' => 'cadastrado',
            'data' => $registro
        ]);
    }

    public function getvalor(Request $request){
        $sensor = Sensor::where('codigo', $request->cod_sensor)->first();
        $valor = registro::where('sensor_id', $sensor->id);

        return response()->json(['valor' => $valor->valor]);
    }
}
