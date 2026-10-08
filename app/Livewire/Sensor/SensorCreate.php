<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $status;
    public $descricao;
    public $tipo;
    public $codigo;

    public function store(){

    if($this->status == null){
        $this->status = false;
    }
        Sensor::create([
        'ambiente_id' => $this->ambiente_id,
        'codigo'  => $this->codigo,
        'tipo' => $this->tipo,
        'descricao' => $this->descricao,

        'status'  => $this->status,
        ]);

        return redirect()->to(route('sensor.Index'));
    }
    

    public function render()
    {
        $ambiente = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambiente'));
    }
}
