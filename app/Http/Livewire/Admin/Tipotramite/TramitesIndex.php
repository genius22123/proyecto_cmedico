<?php

namespace App\Http\Livewire\Admin\Tipotramite;

use App\Models\Tipo_documento;
use Livewire\Component;
use App\Models\Tipo_tramite;

class TramitesIndex extends Component
{
    public $tramite;
    public $id_tramite;
    protected $listeners=['render'=>'render','delete'];
    protected $rules=[
        'tramite.nombre'=>'required',
      
    ];
    public function render()
    {
        $tramites=Tipo_tramite::all();
       
        return view('livewire.admin.tipotramite.tramites-index',compact('tramites'))
        ->extends('layouts.theme.app')->section('content');
    }


    public function edit(Tipo_tramite $tramite )
    {
        $this->id_tramite=$tramite->id;
        $this->tramite=$tramite;
    }

    public function update(){ 
        $this->validate();

        $this->tramite->save();

        $this->resetValidation();

        $this->emit('tramite-editado');
       
        $this->emit('alert','EL el tipo tramite fue Editado Correctamente');
        
  }
  public function cancelar()
  {
      $this->resetValidation();

  }
  public function delete(Tipo_tramite $tramite)
  {
      $tramite->delete();
  }
}
