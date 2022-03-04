
   
     <div class="card shadow-xl border-0  ">
        <div class="card-header bg-white d-flex justify-content-between">
       
          
               <h4 class="">Listado</h4>
    
                 
            
        </div>
         
        <div class="card-body ">
         
            <div class=" filtered-list-search mb-3 d-flex  justify-content-between  " >
                 @livewire('admin.tipodocumentos.documentos-crear') 
            
               
                
            </div>
        
       
                 @include('livewire.admin.tipodocumentos.documentos-editar')
                <table class="table  table-hover table-responsive-xl ">
                     <thead class="table-bordered" bordercolor="red" >
                          <tr style="background: rgba(234, 241, 255, 0.74);">
                
                            <th    >
                                Id
                             
                            </th>
                    
                                <th  >
                                    Nombres    
                                </th>
                                <th  >
                                    Cantidad clientes Registrados
                                   
                                 
                                </th>
                               
                        
                                <th  class="text-center dt-no-sorting">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                 @foreach ($documentos as $item)
                        <tr >
                
                        <td > {{$item->id}} </td>
                        <td > {{$item->nombre}} </td>
                        <td >Existe  {{$item->clientes->count()}} clientes registrados con tipo de documento {{$item->nombre}} </td>
                       
                        <td class="text-center">
                            <ul class="table-controls">
                                
                                <li><a href="javascript:void(0);"  data-toggle="modal" data-target="#editmodal" wire:click="edit({{$item}})" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                <li><a href="javascript:void(0);"  wire:click="$emit('deleteDocumento',{{$item->id}})" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                            </ul>
                        </td>
       
            
                    
                    </tr>
                    @endforeach 
                
                    </tbody>
               </table> 
            
           
        </div>
        <div class="card-footer text-muted bg-white">
       
        </div>

      
             @push('js')
           <script>
              Livewire.on('deleteDocumento',documentotId=>{
                swal({
                        title: '¿Estas seguro?',
                        text: "¡No podras revertir esta accion!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Eliminar',
                        padding: '2em'
                        }).then(function(result) {
                        if (result.value) {

                            Livewire.emitTo('admin.tipodocumentos.documentos-index','delete',documentotId);


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

