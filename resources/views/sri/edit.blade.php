@extends('layouts.app')

@section('title-top')
    Editar SRI de  {{Auth::user()->company()->name}}
@endsection

@section('title-body')
    Editar SRI de  {{Auth::user()->company()->name}}
@endsection

@section('content')

  <div class="card card-primary">
    @include('sri.form',['url'=>route('sri.update'),'edit'=> true])    
  </div>
  <!-- /.card -->

  
    @include('retentions.card',
      [
        'titleRetention' => 'Retenciones',
        'retentionsList'=>$retentions,
        'retentionsIntern'=>$sri->company->retentionsIntern,
        'urlAdd' => route('sri.add-retention'),
        'urlRemove' => 'sri.remove-retention',
      ])
  

@endsection
