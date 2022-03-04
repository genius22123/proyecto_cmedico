<div class=" " >
  
    <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#themodal">Añadir +</button> 
  
 
      <!-- Modal -->
      <div wire:ignore.self class="modal fade " data-keyboard="false" data-backdrop="static" tabindex="-1" style="display: none;" id="themodal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Registrar nuevo TIPO DOCUMENTO</h5>
                    
                </div>
                <div class="modal-body">
                    <form class="simple-example">
                        <div class="form-group mb-4 form-row">
                            <label for="nombre">Nombre</label>
                                <input required type="text" class="form-control" placeholder="Nombre" wire:model.lazy="nombre">
                               
                                @error('nombre')
                                <div class="text-danger " >
                                    {{$message}}
                                </div>
                                @enderror
                          
                        </div>
                      
                    
                     
                      
           
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" wire:click="cancelar"><i class="flaticon-cancel-12"></i> Cancelar</button>
                    <button type="button" class="btn btn-info" wire:click="save"  wire:loading.attr="disabled"  >Guardar</button>
                 
                </div>
            </div>
        </div>
    </div> 
   
      
</div> 
