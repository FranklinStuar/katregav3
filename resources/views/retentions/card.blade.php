@isset($titleRetention)
    <h3>{{$titleRetention}}</h3>
@endisset
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form role="form" action="{{$urlAdd}}" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="representant">Escoger Retención <span class="red-text">*</span></label>
                        <select name="retention_id" class="form-control mb-2" required>
                            @foreach ($retentionsList as $retention)
                                <option value="{{$retention->id}}">
                                    {{$retention->code}} - {{$retention->description}} - {{$retention->porcent}}%
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Agregar Retención</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Porcentaje</th>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($retentionsIntern as $retention)
                            <tr>
                                <td> {{$retention->code}} </td>
                                <td> {{$retention->description}} </td>
                                <td> {{$retention->porcent}} </td>
                                <td> {{$retention->destine}} </td>
                                <td> 
                                    @if (isset($otherId))
                                        @php
                                            $linkRemove = route($urlRemove,[$otherId,$retention->id])
                                        @endphp
                                    @else
                                        @php
                                            $linkRemove = route($urlRemove,[$retention->id])
                                        @endphp
                                    @endif
                                    <button 
                                        class="delete btn btn-sm btn-outline-danger" 
                                        onclick="deleteItem(
                                            '{{$linkRemove}}',
                                            '{{$retention->description}}'
                                            )">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>