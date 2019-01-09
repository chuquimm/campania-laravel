@extends('layouts.layout')
@section('title', 'Welcome')

@section('content')
    <div class="container">
        @include('partials.form.donante')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js\form\donante.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('input.autocomplete').autocomplete({
                data: {
                    @foreach ($distritos as $distrito)
                        '{{ $distrito->departamento->nombre }}/{{ $distrito->provincia->nombre }}/{{ $distrito->nombre }}': null,
                    @endforeach
                },
            });
        });
    </script>
@endsection