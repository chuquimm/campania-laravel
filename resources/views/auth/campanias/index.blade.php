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
                            {{-- {{ Form::open(array('url' => 'campanias/' . $campania->id, 'class' => 'right')) }} --}}
                            {!! Form::open(['route' => ['campanias.destroy', $campania->id], 'method' => 'DELETE', 'id' => 'deleteBtn', 'enctype' => 'multipart/form-data']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('X', array('class' => 'btn-floating waves-effect waves-light red')) }}
                                <a class="btn-floating waves-effect waves-light red" onclick="if(confirm('¿Eliminar?')){document.getElementById('deleteBtn').submit();};"></a>
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