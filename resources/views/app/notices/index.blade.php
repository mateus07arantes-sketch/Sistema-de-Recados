@extends('app.layouts.template')

@section('title', 'Visualizar Recado')

@section('content')
    @component('app.components.table-notice-index', ['notices' => $notices])
    @endcomponent
@endsection