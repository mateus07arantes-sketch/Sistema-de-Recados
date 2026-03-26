@extends('app.layouts.template')

@section('title', 'Editar Recado')

@section('content')
    @component('app.components.form-notice-edit', ['notice' => $notice])
    @endcomponent
@endsection