@extends('layouts.layout')
@section('title', $campania->nombre)
@section('content')
    <h1>{{ $campania->nombre}}</h1>
    <img src="{{ Storage::url($campania->imagen) }}" alt="" width="500" class="img-responsive">
    <p>{{ $campania->descripcion}}</p>
@endsection