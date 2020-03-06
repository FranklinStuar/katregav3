
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    @if ($edit)
        {{ method_field('PUT') }}
    @endif
    <div class="card-body">
        <div class="form-group">
            <label for="identification">Identificación</label>
            <input type="text" name="identification" class="form-control" id="identification" placeholder="Identificación" value="{{$employee->identification}}">
        </div>
        <div class="form-group">
            <label for="name">Nombre del cliente</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del cliente" value="{{$employee->name}}">
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" value="{{$employee->address}}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" value="{{$employee->phone}}">
        </div>
        <div class="form-group">
            <label for="movile">Celular</label>
            <input type="text" name="movile" class="form-control" id="movile" placeholder="Celular" value="{{$employee->movile}}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Correo electrónico" value="{{$employee->email}}">
        </div>
        <div class="form-group">
            <label for="bird">Fecha de cumpleaños </label>
            <input type="date" name="bird" class="form-control" id="bird" value="{{$employee->bird}}">
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="salary" class="col-sm-6">Salario</label>
                <input type="number" placeholder="1.0" step="0.01" min="0" name="salary" class="form-control col-sm-6" id="salary"  value="{{$employee->salary}}">
            </div>
            <div class="form-group col-md-4">
                <label for="journal" class="col-sm-6">Jornadas laborales</label>
                <input type="number" placeholder="1" min="1" max="3" name="journal" class="form-control col-sm-6" id="journal"  value="{{$employee->journal}}">
            </div>
            <div class="form-group col-md-4">
                <label for="charge">Puesto de trabajo </label>
                <input type="text" name="charge" class="form-control" id="charge" placeholder="Puesto de trabajo" value="{{$employee->charge}}">
            </div>
        </div>
        <div class="form-group">
            <label for="type_employee_id" class="col-sm-6">Tipo de empleado <span class="red-text">*</span></label>
            <select name="type_employee_id" class="form-control" class="col-sm-6" required>
                @foreach ($types as $type)
                    <option value="{{$type->id}}" @if($type->id == $employee->type_employee_id) selected @endif>{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        @if($edit)
            <hr>
            <div class="form-group">
                <label for="active" class="col-sm-6">Estado <span class="red-text">*</span></label>
                <select name="active" class="form-control" class="col-sm-6" required>
                    <option value="1" @if($employee->active) selected @endif>Activo</option>
                    <option value="0" @if(!$employee->active) selected @endif>Bloqueado</option>
                </select>
            </div>
        @endif
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('employees.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>