@extends('layouts.layout')
@section('title', 'Welcome')

@section('content')
@include('partials.errorToast')
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
                    <a class="modal-trigger" href="{{ '#modalCampania' . $campania->id }}">Link</a>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$campania->nombre}}<i class="material-icons right">close</i></span>
                    <p>{{$campania->descripcion}}</p>
                    <a class="modal-trigger" href="{{ '#modalCampania' . $campania->id }}">Link</a>
                </div>
                @include('partials.modals.campania')
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
    $('.modal').modal();
  });

</script>
@endsection