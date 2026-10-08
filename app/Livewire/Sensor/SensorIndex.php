<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
        public function status($id)
{
    $sensor = Sensor::find($id);
    $sensor->status = !$sensor->status;
    $sensor->save();
}

    public function delete($id){
        $sensor = Sensor::find($id);
        if($sensor != null){
            $sensor->delete();
        }
    }
    public function render()
    {
        $sensores = Sensor::all();
        return view('livewire.sensor.sensor-index', compact('sensores'));
    }
}
