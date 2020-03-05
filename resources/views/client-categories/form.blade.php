
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif
    <div class="card-body">
        <div class="form-group">
        <label for="name">Nombre la categoría</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre la categoría" value="{{$category->name}}">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('client-categories.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>