@extends('app.layouts.template')

@section('title', 'Cadastrar Aluno')

@section('content')
    @component('app.components.form-student-register')
    @endcomponent
@endsection