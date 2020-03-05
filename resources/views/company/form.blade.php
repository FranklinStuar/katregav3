
<form role="form" action="{{$url}}" method="POST" autocomplete="off">
    @csrf
    {{ method_field('PUT') }}
    <div class="card-body">
        <div class="form-group">
            <label for="identification">Identificación <span class="red-text">*</span></label>
            <input type="text" name="identification" class="form-control" id="identification" placeholder="Identificación" value="{{$company->identification}}" required>
        </div>
        <div class="form-group">
            <label for="type_identification" class="col-sm-6">Tipo de identificación <span class="red-text">*</span></label>
            <select name="type_identification" class="form-control" class="col-sm-6" required>
                <option value="other" @if($company->type_identification == 'other') selected @endif>Sin compromiso legal</option>
                <option value="ruc" @if($company->type_identification == 'ruc') selected @endif>RUC</option>
                <option value="rise" @if($company->type_identification == 'rise') selected @endif>RISE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nombre de la empresa <span class="red-text">*</span></label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre de la empresa" value="{{$company->name}}" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" value="{{$company->address}}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" value="{{$company->phone}}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico <span class="red-text">*</span></label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Correo electrónico" value="{{$company->email}}" required>
        </div>
        <div class="form-group">
            <label for="sri" class="col-sm-6">Compromiso legal <span class="red-text">*</span></label>
            <select name="sri" class="form-control" class="col-sm-6" required>
                <option value="1" @if($company->sri) selected @endif>Utiliza SRI</option>
                <option value="0" @if(!$company->sri) selected @endif>NO Utiliza SRI</option>
            </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>