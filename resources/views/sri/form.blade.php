
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    {{ method_field('PUT') }}
    <div class="card-body">
        <div class="form-group">
            <label for="representant">Representante de la empresa <span class="red-text">*</span></label>
            <input type="text" name="representant" class="form-control" id="representant" placeholder="Representante de la empresa" value="{{$sri->representant}}" required>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cod_local_bill" >Numeración para local <span class="red-text">*</span></label>
                <input type="number" placeholder="1" min="1" max='999' name="cod_local_bill" class="form-control col-sm-6" id="cod_local_bill"  value="{{$sri->cod_local_bill}}">
            </div>
            <div class="form-group col-md-4">
                <label for="cod_terminal_bill" >Numeración para terminal <span class="red-text">*</span></label>
                <input type="number" placeholder="1" min="1" max='999' name="cod_terminal_bill" class="form-control col-sm-6" id="cod_terminal_bill"  value="{{$sri->cod_terminal_bill}}">
            </div>
            <div class="form-group col-md-4">
                <label for="cod_currenct_bill" >Numeración siguiente a facturar <span class="red-text">*</span></label>
                <input type="number" placeholder="1" min="1" max='999999999' name="cod_currenct_bill" class="form-control col-sm-6" id="cod_currenct_bill"  value="{{$sri->cod_currenct_bill}}">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="amount_min_bill" >Monto mínimo a facturar automáticamente <span class="red-text">*</span></label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="amount_min_bill" class="form-control col-sm-6" id="amount_min_bill"  value="{{$sri->amount_min_bill}}">
            </div>
            <div class="form-group col-md-4">
                <label for="amount_max_bill" >Monto máximo por factura <span class="red-text">*</span></label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="amount_max_bill" class="form-control col-sm-6" id="amount_max_bill"  value="{{$sri->amount_max_bill}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="retention_font">Retención a la fuente <span class="red-text">*</span></label>
                <select name="retention_font" class="form-control" required>
                    <option value="none">Sin retención a la fuente</option>
                    @foreach ($fontRetentions as $retention)
                        <option value="{{$retention->id}}" @if($retention->id == $sri->retention_font) selected @endif>
                            {{$retention->code}} - {{$retention->description}} - {{$retention->porcent}}%
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="retention_tax">Retención al IVA <span class="red-text">*</span></label>
                <select name="retention_tax" class="form-control" required>
                    <option value="none">Sin retención al IVA</option>
                    @foreach ($taxRetentions as $retention)
                        <option value="{{$retention->id}}" @if($retention->id == $sri->retention_tax) selected @endif>
                            {{$retention->code}} - {{$retention->description}} - {{$retention->porcent}}%
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>