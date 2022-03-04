 <div wire:ignore.self class="modal fade " data-backdrop="static"  data-keyboard="false" tabindex="-1" style="display: none;" id="editmodal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  >Editar CLIENTE | ID: {{$id_cliente}} </h5>
               
            </div>
            <div class="modal-body">
                <form class="simple-example">
        

                    <div class="form-group mb-4 form-row">
                        <label for="nombre">Nombres </label>
                            <input required type="text" class="form-control" placeholder="Nombres" wire:model.lazy="cliente.nombres">
                           
                            @error('cliente.nombres')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                      
                    </div>
                    <div class="form-row mb-4">
                       
                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellido Paterno</label>
                            <input type="text" class="form-control" placeholder="Apellido Paterno" wire:model.lazy="cliente.apellido_paterno">
                            @error('cliente.apellido_paterno')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellido Materno</label>
                            <input type="text" class="form-control"  placeholder="Apellido Materno" wire:model.lazy="cliente.apellido_materno">
                            @error('cliente.apellido_materno')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="form-row mb-4">
                        <div class="form-group col-md-3">
                            <label >Tipo Documento</label>
                            <select wire:model.lazy="cliente.tipo_documento_id" class="form-control">
                                <option value="" selected >Elegir...</option>
                                @foreach ($t_documentos as $t_documento)
                                     <option value="{{$t_documento->id}}" >{{$t_documento->nombre}}</option>
                                @endforeach
                               
                            </select>
                            @error('cliente.tipo_documento_id')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                    
                        </div>
                        <div class="form-group col-md-5">
                            <label for="">Numero Documento</label>
                            <input type="text" class="form-control" wire:model.lazy="cliente.numero_documento">
                            @error('cliente.numero_documento')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Fecha Nacimiento</label>
                            <input   wire:model.lazy='cliente.fecha_nacimiento'  placeholder="dd-mm-aaaa" class="form-control "   type="date"  >
                         
                            @error('cliente.fecha_nacimiento')
                            <div class="text-danger " >
                                {{$message}}
                            </div>
                            @enderror
                            
                                                    </div>
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

