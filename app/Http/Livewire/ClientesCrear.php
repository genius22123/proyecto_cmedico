<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;
use App\Models\Tipo_documento;



class ClientesCrear extends Component
{
    public $nombres,$apellido_paterno,$apellido_materno,$tipo_documento_id,$fecha_nacimiento,$numero_documento;
    public $t_documentos;

    protected $rules=[
        'nombres'=>'required',
        'apellido_paterno'=>'required',
        'apellido_materno'=>'required',
        'numero_documento'=>'required|min:8|max:10',
        'tipo_documento_id'=>'required',
        'fecha_nacimiento'=>'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 


    public function mount(){
        $this->t_documentos=Tipo_documento::all();
    }
    public function save(){

        $this->validate();

        Cliente::create([
            'nombres'=>$this->nombres,
            'apellido_paterno'=>$this->apellido_paterno,
            'apellido_materno'=>$this->apellido_materno,
            'numero_documento'=>$this->numero_documento,
            'tipo_documento_id'=>$this->tipo_documento_id,
            'fecha_nacimiento'=>$this->fecha_nacimiento

        ]);
        $this->reset([
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'numero_documento',
            'tipo_documento_id',
            'fecha_nacimiento'
        ]);
        $this->emit('render');
        $this->emit('cliente-agregado');
        $this->emit('alert','EL cliente fue Agregado Correctamente');
    }
    public function cancelar()
    {
        $this->resetValidation();

    }

    public function render()
    {
       
        return view('livewire.clientes-crear');
    }
}
