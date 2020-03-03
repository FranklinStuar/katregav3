<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif

    <div class="card-body">
        <div class="form-group">
            <label for="code">Código <span class="red-text">*</span></label>
            <input type="text" name="code" maxlength="15" class="form-control" id="code" placeholder="Código" value="{{$product->stock->code}}" required>
        </div>
        <div class="form-group">
            <label for="name">Nombre principal <span class="red-text">*</span></label>
            <input type="text" name="name" maxlength="80" class="form-control" id="name" placeholder="Nombre principal" value="{{$product->stock->name}}" required>
        </div>
        <div class="form-group">
            <label for="alternative_name">Nombre Alterno</label>
            <input type="text" name="alternative_name" maxlength="80" class="form-control" id="alternative_name" placeholder="Nombre Alterno" value="{{$product->stock->alternative_name}}">
        </div>
        <div class="form-group ">
            <label for="tax" class="col-sm-6">IVA <span class="red-text">*</span></label>
            <select name="tax" class="form-control col-sm-6" required>
                <option value="1" @if($product->stock->tax) selected @endif>Con IVA</option>
                <option value="0" @if(!$product->stock->tax) selected @endif>Sin IVA</option>
            </select>
        </div>
        <div class="form-group">
            <label  class="col-sm-6">Destino</label>
            <div class="col-sm-6">
                <!-- checkbox -->
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="seller" @if($product->stock->seller) value='1' checked @endif>
                            Vender
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="purchase" @if($product->stock->purchase) value='1' checked @endif>
                            Comprar
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h3>Precios</h3>
        <div class="form-group">
            <label for="price_1" class="col-sm-6">Minorista <span class="red-text">*</span></label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_1" class="form-control col-sm-6" id="price_1"  value="{{$product->stock->price_1}}" required>
        </div>
        <div class="form-group">
            <label for="price_2" class="col-sm-6">Mayorista</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_2" class="form-control col-sm-6" id="price_2"  value="{{$product->stock->price_2}}">
        </div>
        <div class="form-group">
            <label for="price_3" class="col-sm-6">Distribuidor</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_3" class="form-control col-sm-6" id="price_3"  value="{{$product->stock->price_3}}">
        </div>
        <div class="form-group">
            <label for="price_4" class="col-sm-6">Proveedor</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_4" class="form-control col-sm-6" id="price_4"  value="{{$product->stock->price_4}}">
        </div>
        <div class="form-group">
            <label for="price_5" class="col-sm-6">Clientes fieles</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_5" class="form-control col-sm-6" id="price_5"  value="{{$product->stock->price_5}}">
        </div>

        <hr>
        <br>
        <div class="row">
            {{-- @if (!$edit) --}}
                <div class="form-group col-md-4">
                    <label for="stock_total" class="col-sm-6">Stock Actual</label>
                    <input type="number" placeholder="1.0" step="0.01" min="0" name="stock_total" class="form-control col-sm-6" id="stock_total"  value="{{$product->stock_total}}">
                </div>
            {{-- @endif --}}
            <div class="form-group col-md-4">
                <label for="stock_nim" class="col-sm-6">Stock Mínimo</label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="stock_nim" class="form-control col-sm-6" id="stock_nim"  value="{{$product->stock_nim}}">
            </div>
            <div class="form-group col-md-4">
                <label for="stock_nax" class="col-sm-6">Stock Máximo</label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="stock_nax" class="form-control col-sm-6" id="stock_nax"  value="{{$product->stock_nax}}">
            </div>
        </div>
        
        <br>
        <hr>

        <div class="form-group">
            <label for="measurement_id" class="col-sm-6">Unidad de medida <span class="red-text">*</span></label>
            <select name="measurement_id" class="form-control" class="col-sm-6" required>
                @foreach ($measurements as $measurement)
                    <option value="{{$measurement->id}}" @if($measurement->id == $product->stock->measurement_id) selected @endif>{{$measurement->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="product_group_id" class="col-sm-6">Grupo <span class="red-text">*</span></label>
            <select name="product_group_id" class="form-control" class="col-sm-6" required>
                @foreach ($groups as $group)
                    <option value="{{$group->id}}" @if($group->id == $product->stock->product_group_id) selected @endif>{{$group->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mark_id" class="col-sm-6">Marca <span class="red-text">*</span></label>
            <select name="mark_id" class="form-control" class="col-sm-6" required>
                @foreach ($marks as $mark)
                    <option value="{{$mark->id}}" @if($mark->id == $product->mark_id) selected @endif>{{$mark->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="line_id" class="col-sm-6">Linea de producto <span class="red-text">*</span></label>
            <select name="line_id" class="form-control" class="col-sm-6" required>
                @foreach ($lines as $line)
                    <option value="{{$line->id}}" @if($line->id == $product->line_id) selected @endif>{{$line->name}}</option>
                @endforeach
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="disscount_fix" class="col-sm-6">Descuento fijo</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_fix" class="form-control col-sm-6" id="disscount_fix"  value="{{$product->stock->disscount_fix}}">
        </div>

        <hr>

        <div class="form-group">
            <label for="disscount_special" class="col-sm-6">Descuento Especial</label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control col-sm-6" id="disscount_special"  value="{{$product->stock->disscount_special}}">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="init_special">Descuento empieza en </label>
                    <input type="date" name="init_special" class="form-control" id="init_special" value="{{$product->stock->init_special}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="finish_special">Descuento termina en </label>
                    <input type="date" name="finish_special" class="form-control" id="finish_special" value="{{$product->stock->finish_special}}">
                </div>
            </div>
        </div>
        @if($edit)
            <hr>
            <div class="form-group">
                <label for="active" class="col-sm-6">Estado <span class="red-text">*</span></label>
                <select name="active" class="form-control" class="col-sm-6" required>
                    <option value="1" @if($product->stock->active) selected @endif>Activo</option>
                    <option value="0" @if(!$product->stock->active) selected @endif>Bloqueado</option>
                </select>
            </div>
        @endif
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>