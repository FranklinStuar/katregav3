@extends('layouts.app')

@section('title-top')
    Retenciones del Proveedor
@endsection

@section('title-body')
    Retenciones del Proveedor
@endsection

@section('content')

  @include('retentions.card',
  [
    'retentionsList'=>$retentions,
    'retentionsIntern'=>$provider->retentions,
    'urlAdd' => route('provider.add-retention',$provider->id),
    'urlRemove' => 'provider.remove-retention',
    'otherId' => $provider->id
  ])

@endsection
