@extends('app.layouts.template')

@section('title', 'Detalhes do Recado')

@section('content')
    @component('app.components.form-notice-show', ['notice' => $notice])
    @endcomponent
@endsection