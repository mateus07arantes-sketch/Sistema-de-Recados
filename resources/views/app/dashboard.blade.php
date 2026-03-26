{{-- Aqui vai ficar as extensions e os componentes para mudar no dashboard --}}
@extends('app.layouts.template')

@section('title', 'Dashboard')

@section('content')
    @component('app.components.dashboard', ['notices' => $notices, 'searchDate' => $searchDate])
   
    @endcomponent
@endsection