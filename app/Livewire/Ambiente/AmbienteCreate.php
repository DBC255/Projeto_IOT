<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public  $status;

    public function store(){


        if($this->nome == null){
            
            session()->flash('error', 'nome nulo');
        }else{
            if($this->status == null){
                $this->status = false;
            }
            Ambiente::create([
                'nome' => $this->nome,
                'descricao' => $this->descricao,
                'status' => $this->status,
                
            ]);

        }
        return redirect()->to(route('ambiente.Index'));
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
