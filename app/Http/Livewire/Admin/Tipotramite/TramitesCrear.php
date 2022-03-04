<?php

namespace App\Http\Livewire\Admin\Tipotramite;

use App\Models\Tipo_tramite;
use Livewire\Component;

class TramitesCrear extends Component
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
        return view('livewire.admin.tipotramite.tramites-crear');
    }
    public function save(){

        $this->validate();

        Tipo_tramite::create([
            'nombre'=>$this->nombre,
            

        ]);
        $this->reset([
            'nombre',
            
        ]);
        $this->emit('render');
        $this->emit('tramite-agregado');
        $this->emit('alert','EL Registro fue Agregado Correctamente');
    }
    public function cancelar()
    {
        $this->resetValidation();

    }
}
