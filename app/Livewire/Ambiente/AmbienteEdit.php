<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $ambienteID;
    public $nome;
    public $descricao;
    public  $status;

    public function mount($id){
        $ambiente = Ambiente::find($id);
        $this->ambienteID = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }

    public function update(){
        $ambiente = Ambiente::find($this->ambienteID);

        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        if($this->status == null){
            $this->status = false;
        }
        $ambiente->status = $this->status;

        $ambiente->save();
        return redirect()->to(route('ambiente.Index'));

    }
    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
