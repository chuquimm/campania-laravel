@extends('layouts.layout')


@section('title')
    Listar Campañas    
@endsection

@section('content')
    <div class="conteiner">
        <table class="highlight centered responsive-table">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </thead>
            <tbody>
                @foreach ($campanias as $campania)
                    <tr>
                        <td>{{$campania->id}}</td>
                        <td>{{$campania->nombre}}</td>
                        <td>{{$campania->descripcion}}</td>
                        <td>
                            <a href="{{ route('campanias.edit', $campania->id) }}" class="btn-floating waves-effect waves-light red"><i class="material-icons">create</i></a>
                            {!! Form::open(['route' => ['campanias.destroy', $campania->id], 'method' => 'DELETE', 'id' => 'deleteBtn' . $campania->id , 'enctype' => 'multipart/form-data']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                <button type='submit' class="btn-floating waves-effect waves-light red" onclick="return confirm('¿Eliminar?');"><i class="material-icons">clear</i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $campanias->render() !!}

        <div class="row center">
            <div col s12>
                <a href="/campanias/create" class="waves-effect waves-light btn-large">Crear</a>
            </div>
        </div>
    </div>
@endsection