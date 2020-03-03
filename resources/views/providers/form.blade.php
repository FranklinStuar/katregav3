
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif
    <div class="card-body">
        <div class="form-group">
            <label for="identification">Identificación</label>
            <input type="text" name="identification" class="form-control" id="identification" placeholder="Identificación" value="{{$provider->identification}}">
        </div>
        
        <div class="form-group">
            <label for="type_identification" class="col-sm-6">Tipo de Identificaciòn <span class="red-text">*</span></label>
            <select name="type_identification" class="form-control" class="col-sm-6" required>
                <option value="none" @if($provider->type_identification == 'none') selected @endif>Ninguno</option>
                <option value="ruc" @if($provider->type_identification == 'ruc') selected @endif>RUC</option>
                <option value="rise" @if($provider->type_identification == 'rise') selected @endif>RISE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nombre del cliente</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del cliente" value="{{$provider->name}}">
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" value="{{$provider->address}}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" value="{{$provider->phone}}">
        </div>
        <div class="form-group">
            <label for="movile">Celular</label>
            <input type="text" name="movile" class="form-control" id="movile" placeholder="Celular" value="{{$provider->movile}}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Correo electrónico" value="{{$provider->email}}">
        </div>
        
        @if(!$edit)
            <hr>
            <div class="form-group">
                <label for="deb">Deuda actual</label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control col-sm-6" id="deb"  value="{{$provider->deb}}">
            </div>
        @endif
        @if($edit)
            <hr>
            <div class="form-group">
                <label for="active" class="col-sm-6">Estado <span class="red-text">*</span></label>
                <select name="active" class="form-control" class="col-sm-6" required>
                    <option value="1" @if($provider->active) selected @endif>Activo</option>
                    <option value="0" @if(!$provider->active) selected @endif>Bloqueado</option>
                </select>
            </div>
        @endif
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('providers.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>