@auth
    <a href='/campanias' class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
@endauth

{!! Form::open(['route' => $formArgs['route'], 'method' => $formArgs['method'], 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <div class="row">
            <div class="input-field col s12">
                <input id="nombre" type="text" class="validate valid" required="" name="nombre" maxlength=100 value={!! isset($campania)?$campania->nombre:"" !!}>
                {!! Form::label('nombre', 'Nombre') !!}
            </div>

            <div class="input-field col s12">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea validate" required>{!! isset($campania)?$campania->descripcion:"" !!}</textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="col s12 center">
                {!! Form::submit($formArgs['submit'], ["class" => "btn-large waves-effect waves-light"]) !!}
            </div>
        </div>
    ...
{{ Form::close() }}
