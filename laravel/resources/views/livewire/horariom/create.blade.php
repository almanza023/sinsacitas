

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if($updateMode)
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DE DATOS</h5>
                @else
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE DATOS</h5>
                @endif

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">MEDICO</label>
                       <select class="form-control" wire:model="medico">
                           <option value="">SELECCIONE</option>
                           @foreach ($medicos as $item)
                               <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                           @endforeach
                       </select>
                        @error('medico') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">FECHA</label>
                        <input type="date" class="form-control" id="exampleFormControlInput2" wire:model="fecha" placeholder="CODIGO">
                        @error('fecha') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">HORA</label>
                        <input type="TIME" class="form-control" id="exampleFormControlInput2" wire:model="hora" placeholder="CODIGO">
                        @error('hora') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">CERRAR</button>
                @if($updateMode)
                <button type="button" wire:click.prevent="update()" class="btn btn-success close-modal">ACTUALIZAR</button>
                @else
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">GUARDAR</button>

                @endif
            </div>
        </div>
    </div>
</div>