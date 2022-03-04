<?php

namespace App\Http\Livewire\Admin\Tipodocumentos;

use Livewire\Component;
use App\Models\Tipo_documento;

class DocumentosCrear extends Component
{
    public $nombre;
    
    protected $rules=[
        'nombre'=>'required',
       
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 
    public function render()
    {
        return view('livewire.admin.tipodocumentos.documentos-crear');
    }

    public function save(){

        $this->validate();

        Tipo_documento::create([
            'nombre'=>$this->nombre,
            

        ]);
        $this->reset([
            'nombre',
            
        ]);
        $this->emit('render');
        $this->emit('documento-agregado');
        $this->emit('alert','EL Registro fue Agregado Correctamente');
    }
    public function cancelar()
    {
        $this->resetValidation();

    }
}
