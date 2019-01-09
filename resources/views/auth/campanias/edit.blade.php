@extends('layouts.layout')
@section('title', 'Registro de campaña')

@section('content')
    <div class="container">
        @include('partials.form.campania')
    </div>
@endsection

@section('script')
<script>
    $('#descripcion').val('');
    M.textareaAutoResize($('#descripcion'));
</script>
@endsection