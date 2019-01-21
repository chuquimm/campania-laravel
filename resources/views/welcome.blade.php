@extends('layouts.layout')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($campanias as $campania)
        <div class="col s4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{Storage::url($campania->imagen)}}" alt="" >
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$campania->nombre}}<i class="material-icons right">more_vert</i></span>
                    <p><a href="{{ '/campania/' . $campania->id }}">Link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$campania->nombre}}<i class="material-icons right">close</i></span>
                    <p>{{$campania->descripcion}}</p>
                    <p><a href="{{ '/campania/' . $campania->id }}">Link</a></p>
                </div>
            </div>  

        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
@endsection