
   
     <div class="card shadow-xl border-0  ">
        <div class="card-header bg-white d-flex justify-content-between">
       
          
               <h4 class="">Listado de Clientes</h4>
    
                 
            
        </div>
         
        <div class="card-body ">
         
            <div class=" filtered-list-search mb-3 d-flex  justify-content-between  " >
                @livewire('clientes-crear')
                <form class="form-inline  w-25  ">
                    <div class="w-100">
                        <input class="w-100 form-control product-search br-30"  placeholder="Buscar" wire:model="search">
                        <button  class="btn btn-warning" disabled ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                    </div>
                  
                 
                </form>
                <div class="d-flex align-items-center  ">
                    <span >Mostrar </span>
                    <select wire:model="cant" class="form-control mx-2 ">
                             <option value="10" >10</option>
                             <option value="25" >25</option>
                             <option value="50" >50</option>
                             <option value="100" >100</option>
                        
                       
                    </select>
                    <span>entradas</span>
                
            
                </div>
                
            </div>
        
            @if ($clientes->count())
                @include('livewire.clientes-editar')
                <table class="table  table-hover table-responsive-xl ">
                     <thead class="table-bordered" bordercolor="red" >
                          <tr style="background: rgba(234, 241, 255, 0.74);">
                
                            <th    style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('id')">
                                Id
                                @if ($sort=='id')
                                        @if ($direction=='asc')
                                        <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                        @else
                                        
                                        <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                        
                                        @endif
                                    
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                    @endif
                            </th>
                    
                                <th style="border:1px solid rgba(250, 115, 115, 0.144);cursor:pointer;" wire:click="order('nombres')">
                                    Nombres
                                    @if ($sort=="nombres")
                                    @if ($direction=='asc')
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                    @else
                                    
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                    
                                    @endif
                                
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                @endif
                                    
                                </th>
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('apellido_paterno')">
                                    Apellido Paterno
                                    @if ($sort=='apellido_paterno')
                                    @if ($direction=='asc')
                                        <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                        @else
                                        
                                        <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                        
                                        @endif
                                    
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                    @endif
                                </th>
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('apellido_materno')">
                                    Apellido Materno
                                    @if ($sort=='apellido_materno')
                                    @if ($direction=='asc')
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                    @else
                                    
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                    
                                    @endif
                                
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                @endif
                                </th>
                                
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('numero_documento')">
                                    Numero Docuemento
                                    @if ($sort=='numero_documento')
                                    @if ($direction=='asc')
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                    @else
                                    
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                    
                                    @endif
                                
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                @endif
                                </th>
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('tipo_documento_id')">
                                    Tipo Documento
                                    @if ($sort=='tipo_documento_id')
                                    @if ($direction=='asc')
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                    @else
                                    
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                    
                                    @endif
                                
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                @endif
                                </th>
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144);cursor:pointer;" wire:click="order('fecha_nacimiento')">
                                    Fecha Nacimiento
                                    @if ($sort=='fecha_nacimiento')
                                    @if ($direction=='asc')
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up float-right"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg>
                                    @else
                                    
                                    <svg style="opacity: 0.3;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-down float-right"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>

                                    
                                    @endif
                                
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down float-right"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up float-right"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                @endif
                                </th>
                            
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144)"  class="text-center">Estado</th>
                                <th  style="border:1px solid rgba(24, 23, 23, 0.144)|" class="text-center dt-no-sorting">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                    @foreach ($clientes as $item)
                        <tr >
                
                        <td > {{$item->id}} </td>
                        <td > {{$item->nombres}} </td>
                        <td > {{$item->apellido_paterno}} </td>
                        <td > {{$item->apellido_materno}} </td>
                        <td > {{$item->numero_documento}} </td>
                        <td > {{$item->tipo_documento->nombre}} </td>
                        <td > {{$item->fecha_nacimiento}} </td>
                    
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center">
                            <ul class="table-controls">
                                
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#editmodal" wire:click="edit({{$item}})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                <li><a href="javascript:void(0);" wire:click="$emit('deleteCliente',{{$item->id}})" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                            </ul>
                        </td>
       
            
                    
                    </tr>
                    @endforeach
                
                    </tbody>
               </table> 
            @else
                <div class="text-center">
                    No Existe Coincidencias para "{{$search}}"
                </div>
            @endif
           
        </div>
        <div class="card-footer text-muted bg-white">
         <div>
                {{$clientes->links()}}
         </div>
        </div>

      
            @push('js')
           <script>
              Livewire.on('deleteCliente',clientetId=>{
                swal({
                        title: '¿Estas seguro?',
                        text: "¡No podras revertir esta accion!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        padding: '2em'
                        }).then(function(result) {
                        if (result.value) {

                            Livewire.emitTo('clientes-index','delete',clientetId);


                            swal(
                            'Eliminado!',
                            'El registro fue eliminado correctamente',
                            'success'
                            )
                        }
                        })
              });
                    
                     
           </script>
            @endpush
       
      </div>
