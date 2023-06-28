@extends('layout')
@section('title','Usuarios')
@section('content')
    
@if ($usuariotabla)
    @foreach ($usuariotabla as $usuariotabla)
        <p>{{ json_encode($usuario) }}</p>
    @endforeach
@else
    
@endif
@endsection