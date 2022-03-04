<?php

namespace App\Http\Livewire\Admin\Tipodocumentos;

use Livewire\Component;
use App\Models\Tipo_documento;

class DocumentosIndex extends Component
{
    public $doc,$id_doc;
    protected $listeners=['render'=>'render','delete'];

    protected $rules=[
        'doc.nombre'=>'required',
      
    ];
    public function render()
    {
    
        $documentos=Tipo_documento::all();
        return view('livewire.admin.tipodocumentos.documentos-index',compact('documentos'))
        ->extends('layouts.theme.app')->section('content');
    }

    
    public function edit(Tipo_documento $doc )
    {
        $this->id_doc=$doc->id;
        $this->doc=$doc;
    }
    public function update(){ 
        $this->validate();

        $this->doc->save();

        $this->resetValidation();

        $this->emit('documento-editado');
       
        $this->emit('alert','EL el tipo documento fue Editado Correctamente');
  }
  public function cancelar()
  {
      $this->resetValidation();

  }
  public function delete(Tipo_documento $doc)
    {
        $doc->delete();
    }
}
