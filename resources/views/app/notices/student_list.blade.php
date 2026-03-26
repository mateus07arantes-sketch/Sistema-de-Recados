@extends('app.layouts.template')

@section('title', 'Visualizar Alunos')

@section('content')
    @component('app.components.table-student-index', ['students' => $students])
    @endcomponent
@endsection