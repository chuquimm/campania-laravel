@extends('layouts.layout')
@section('title', 'Edición de donante')

@section('content')
    <div class="container">
        @include('partials.form.donante')
    </div>
@endsection
@section('script')
<script src="{{ asset('js\form\donante.js') }}"></script>
@endsection