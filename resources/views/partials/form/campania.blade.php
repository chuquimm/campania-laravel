@auth
    <a href='/campanias' class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
@endauth

{!! Form::open(['route' => $formArgs['route'], 'method' => $formArgs['method'], 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <div class="row">
            <div class="input-field col s12 m5">
                <input id="nombre" type="text" class="validate valid" required="" name="nombre" maxlength=100 value={!! isset($campania)?$campania->nombre:"" !!}>
                {!! Form::label('nombre', 'Nombre') !!}
            </div>

            <div class="input-field col s8 m5">
                <input type="text" id="meta" name="meta" class="validate valid" required>
                <label for="meta">Meta</label>
            </div>

            <div class="input-field col s4 m2 switch">
                <label>
                <input type="checkbox" name="estado">
                <span class="lever"></span>
                Completo
                </label>
            </div>
            
            <div class="input-field col s12">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea validate" required>{!! isset($campania)?$campania->descripcion:"" !!}</textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="file-field input-field col s6 center-align">
                <div class="btn">
                    <span>Imagen de cabecera</span>
                    <input type="file" name="imagen" id="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Subir imagen de cabecera">
                </div>
            </div>

            <div class="col s12 center-align">
                {!! Form::submit($formArgs['submit'], ["class" => "btn-large waves-effect waves-light"]) !!}
            </div>
        </div>
    ...
{{ Form::close() }}
