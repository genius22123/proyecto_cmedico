<div wire:ignore.self class="modal fade " data-backdrop="static"  data-keyboard="false" tabindex="-1" style="display: none;" id="editmodal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  >Editar Tipo Tramite | ID: {{$id_tramite}} </h5>
               
            </div>
            <div class="modal-body">
                <form class="simple-example">
        

                    <div class="form-group mb-4 form-row">
                        <label for="nombre">Nombre </label>
                            <input required type="text" class="form-control" placeholder="Nombre" wire:model.lazy="tramite.nombre">
                           
                            @error('tramite.nombre')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                      
                    </div>
                   
                
                    
                  
       
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" wire:click="cancelar"><i class="flaticon-cancel-12"></i> Cancelar</button>
                <button type="button"  wire:click="update" wire:loading.attr="disabled"  class="btn btn-info"   >Aplicar Cambios</button>
              
            </div>
        </div>
    </div>
</div>  

