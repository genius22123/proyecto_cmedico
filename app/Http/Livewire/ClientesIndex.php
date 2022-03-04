<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Livewire\WithPagination;
use App\Models\Tipo_documento;
class ClientesIndex extends Component
{
    use WithPagination;
    
    protected $listeners=['render'=>'render','delete'];
    
    public $id_cliente;
    public $cant=10;
    public $search;
    public $cliente;
    public $sort='id';
    public $direction="desc";
    protected $rules=[
        'cliente.nombres'=>'required',
        'cliente.apellido_paterno'=>'required',
        'cliente.apellido_materno'=>'required',
        'cliente.numero_documento'=>'required|min:8|max:10',
        'cliente.tipo_documento_id'=>'required',
        'cliente.fecha_nacimiento'=>'required'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 
   
   

    public function mount(){
        $this->t_documentos=Tipo_documento::all();
    }
    public function updatingSearch()
    {   
            $this->resetPage();
    }
    public function updatingCant()
    {   
            $this->resetPage();
    }
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }
     
    public function render()
    {
        $clientes=Cliente::where('nombres','like','%' . $this->search . '%')
                            ->orwhere('apellido_paterno','like','%' . $this->search . '%')
                            ->orwhere('apellido_materno','like','%' . $this->search . '%')
                            ->orwhere('tipo_documento_id','like','%' . $this->search . '%')
                            ->orwhere('fecha_nacimiento','like','%' . $this->search . '%')
                            ->orwhere('numero_documento','like','%' . $this->search . '%')
                            ->orderBy($this->sort,$this->direction)->paginate($this->cant) ;



        return view('livewire.clientes-index',compact('clientes'))
        ->extends('layouts.theme.app')->section('content');
    }
    public function order($sort)
    {
        if ( $this->sort==$sort ) {
           if($this->direction=='desc'){
                    $this->direction='asc';
           }else{
            $this->direction='desc';
           }
        } else {
           $this->sort=$sort;
            $this->direction='asc';
        }
        
     
    }

    public function edit(Cliente $cliente)
    {
        $this->id_cliente=$cliente->id;
       $this->cliente=$cliente;
    }

    
    public function update(){ 
          $this->validate();

          $this->cliente->save();

          $this->resetValidation();

          $this->emit('cliente-editado');
         
          $this->emit('alert','EL cliente Editado Correctamente');
    }

    public function cancelar()
    {
        $this->resetValidation();

    }
    public function delete(Cliente $cliente)
    {
        $cliente->delete();
    }
}
