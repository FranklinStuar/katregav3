
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif
    <div class="card-body">
        <div class="form-group">
            <label for="code">Código <span class="red-text">*</span></label>
            <input type="text" name="code" class="form-control" id="code" placeholder="Código" value="{{$retention->code}}" required>
        </div>
        <div class="form-group">
            <label for="code_anex">Código Anexo</label>
            <input type="text" name="code_anex" class="form-control" id="code_anex" placeholder="Código" value="{{$retention->code_anex}}">
        </div>
        <div class="form-group">
            <label for="description">Descripción <span class="red-text">*</span></label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Descripción" value="{{$retention->description}}" required>
        </div>
        <div class="form-group">
            <label for="porcent" >Porcentaje <span class="red-text">*</span></label>
            <input type="number" placeholder="1.0" step="0.01" min="0" name="porcent" class="form-control" id="porcent" value="{{$retention->porcent}}" required>
        </div>
        <div class="form-group">
            <label for="destine" class="col-sm-6">Destino de la retención <span class="red-text">*</span></label>
            <select name="destine" class="form-control" class="col-sm-6" required>
                <option value="0" @if($retention->destine == "0") selected @endif>Retención a la fuente</option>
                <option value="1" @if($retention->destine == "1") selected @endif>Retención al IVA</option>
            </select>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('retentions.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>