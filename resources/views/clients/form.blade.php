
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif
    <div class="card-body">
        <div class="form-group">
            <label for="identification">Identificación <span class="red-text">*</span></label>
            <input type="text" name="identification" class="form-control" id="identification" placeholder="Identificación" value="{{$client->identification}}" required>
        </div>
        <div class="form-group">
            <label for="name">Nombre del cliente <span class="red-text">*</span></label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del cliente" value="{{$client->name}}" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" value="{{$client->address}}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" value="{{$client->phone}}">
        </div>
        <div class="form-group">
            <label for="movile">Celular</label>
            <input type="text" name="movile" class="form-control" id="movile" placeholder="Celular" value="{{$client->movile}}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico <span class="red-text">*</span></label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Correo electrónico" value="{{$client->email}}" required>
        </div>
        <hr>
        <div class="form-group">
            <label for="credit">Máxima deuda permitida <span class="red-text">*</span></label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="credit" class="form-control col-sm-6" id="credit"  value="{{$client->credit}}" required>
        </div>
        <div class="form-group">
            <label for="discount">Descuento <span class="red-text">*</span></label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="discount" class="form-control col-sm-6" id="discount"  value="{{$client->discount}}" required>
        </div>
        <hr>
        <div class="form-group">
            <label for="type_price" class="col-sm-6">Tipo de venta <span class="red-text">*</span></label>
            <select name="type_price" class="form-control" class="col-sm-6" required>
                <option value="1" @if($client->type_price == 1) selected @endif>Minorista</option>
                <option value="2" @if($client->type_price == 2) selected @endif>Mayorista</option>
                <option value="3" @if($client->type_price == 3) selected @endif>Distribuidor</option>
                <option value="4" @if($client->type_price == 4) selected @endif>Proveedor</option>
                <option value="5" @if($client->type_price == 5) selected @endif>Cliente Fiel</option>
            </select>
        </div>
        <hr>
        
        <div class="form-group">
            <label for="type_client_id" class="col-sm-6">Tipo de cliente <span class="red-text">*</span></label>
            <select name="type_client_id" class="form-control" class="col-sm-6" required>
                @foreach ($types as $type)
                    <option value="{{$type->id}}" @if($type->id == $client->type_client_id) selected @endif>{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="category_client_id" class="col-sm-6">Categoría de cliente <span class="red-text">*</span></label>
            <select name="category_client_id" class="form-control" class="col-sm-6" required>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $client->category_client_id) selected @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="zone_client_id" class="col-sm-6">Zona de cliente <span class="red-text">*</span></label>
            <select name="zone_client_id" class="form-control" class="col-sm-6" required>
                @foreach ($zones as $zone)
                    <option value="{{$zone->id}}" @if($zone->id == $client->zone_client_id) selected @endif>{{$zone->name}}</option>
                @endforeach
            </select>
        </div>

        @if($edit)
            <hr>
            <div class="form-group">
                <label for="active" class="col-sm-6">Estado <span class="red-text">*</span></label>
                <select name="active" class="form-control" class="col-sm-6" required>
                    <option value="1" @if($client->active) selected @endif>Activo</option>
                    <option value="0" @if(!$client->active) selected @endif>Bloqueado</option>
                </select>
            </div>
        @endif
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>