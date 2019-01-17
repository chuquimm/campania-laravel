@extends('layouts.layout')


@section('title')
    Listar Donantes    
@endsection

@section('content')
    <div class="conteiner">
        <table class="highlight centered responsive-table">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Sangre</th>
                <th>Acción</th>
            </thead>
            <tbody>
                @foreach ($donantes as $donante)
                    <tr>
                        <td>{{$donante->id}}</td>
                        <td>{{$donante->nombre}}</td>
                        <td>{{$donante->apellido}}</td>
                        <td>{{$donante->correo}}</td>
                        <td>{{$donante->sangre}}{{$donante->factor}}</td>
                        <td>
                            <a href="{{ route('donantes.edit', $donante->id) }}" class="btn-floating waves-effect waves-light red"><i class="material-icons">create</i></a>
                            {!! Form::open(['route' => ['donantes.destroy', $donante->id], 'method' => 'DELETE', 'id' => 'deleteBtn' . $donante->id , 'enctype' => 'multipart/form-data']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                <button type='submit' class="btn-floating waves-effect waves-light red" onclick="return confirm('¿Eliminar?');"><i class="material-icons">clear</i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $donantes->render() !!}
    </div>
@endsection