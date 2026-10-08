<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $status;
    public $descricao;
    public $tipo;
    public $codigo;
    public $sensorID;

    public function mount($id){
        $sensor = Sensor::find($id);
        $this->sensorID = $sensor->id;
        $this->tipo = $sensor->tipo;
        $this->codigo = $sensor->codigo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
        $this->ambiente_id = $sensor->ambiente_id;
    }

    public function update(){
        $sensor = Sensor::find($this->sensorID);

        $sensor->tipo = $this->tipo;
        $sensor->codigo = $this->codigo;
        $sensor->descricao = $this->descricao;
        if($this->status == null){
            $this->status = false;
        }
        $sensor->status = $this->status;
        $sensor->ambiente_id = $this->ambiente_id;

        $sensor->save();
        return redirect()->to(route('sensor.Index'));

    }

    public function render()
    {
        $ambiente = Ambiente::all();
        return view('livewire.sensor.sensor-edit', compact('ambiente'));
    }
}
