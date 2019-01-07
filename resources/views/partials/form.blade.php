{!! Form::open(['route' => 'donantes.store', 'method' => 'POST', 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <div class="row">
            <div class="input-field col s6">
                {!! Form::text('nombre', null, ['id' => 'nombre', 'type' => 'text', 'class' => 'validate', 'required']) !!}
                {!! Form::label('nombre', 'Nombre') !!}
            </div>

            <div class="input-field col s6">
                {!! Form::text('apellido', null, ['id' => 'apellido', 'type' => 'text', 'class' => 'validate', 'required'] ) !!}
                {!! Form::label('apellido', 'Apellido') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::email('correo', null, ['id' => 'correo', 'class' => 'validate', 'required']) !!}
                {!! Form::label('correo', 'Correo') !!}
            </div>
        </div>

        <div class="row">
                <div class="input-field col s6">
                    {!! Form::text('dni', null, ['id' => 'dni', 'type' => 'text', 'class' => 'validate', 'required']) !!}
                    {!! Form::label('dni', 'DNI') !!}
                </div>

                <div class="input-field col s6">
                    {!! Form::text('celular', null, ['id' => 'celular', 'type' => 'text', 'class' => 'validate', 'required'] ) !!}
                    {!! Form::label('celular', 'Celular') !!}
                </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::date('fnacimiento', null, ['class' => 'datepicker']) !!}
                {!! Form::label('fnacimiento', 'Fecha de Nacimiento') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('genero', [true => 'Masculino', false => 'Fememnino']) !!}
                {!! Form::label('genero', 'Genero') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                {!! Form::select('sangre', ['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], null, ['placeholder' => 'Sangre', 'id' => 'sangre'/* , 'disabled'=> 'false' */])!!}
                {!! Form::label('sangre', 'Sangre') !!}
            </div>

            <div class="input-field col s4">
                {!! Form::select('factor', ['+' => '+', '-' => '-'], null, ['placeholder' => 'Factor', 'id' => 'factor'/* , 'disabled'=> 'false' */]) !!}
                {!! Form::label('factor', 'Factor') !!}
            </div>

            <div class="col s4">
                <label>
                    {{-- <input type="checkbox" id="checkSangre" name="checkSangre" /> --}}
                    {!! Form::checkbox('checkSangre', null , false, ['id' => 'checkSangre', 'class' => 'chk']) !!}
                    <span>No conozco mi tipo de sangre</span>
                </label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('lugar', null, ['id' => 'lugar', 'type' => 'text', 'class' => 'validate autocomplete', 'required']) !!}
                {!! Form::label('lugar', 'Departamento / Provincia / Distrito') !!}
            </div>
        </div>

        <div class="row">
            <div class="col s4 m12 center">
                <img src="{{ Storage::url('avatar.png') }}" alt="" class="circle responsive-img" width="20%">
            </div>
            <div class="col s4 m12 center">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="foto" value="avatar.png">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col s4 offset-s2">
                ¿Quieres que te enviemos notificaciones via SMS?
            </div>
            <div class="col s2">
                <div class="switch">
                    <label>
                        {!! Form::checkbox("sms", null , true, ['required']) !!}
                        <span class="lever"></span>
                    </label>
                </div>
            </div>
                
            <div class="col s7 offset-s5">
                <label>
                    <input name="terminos" type="checkbox" required>
                    <span>Acepto terminos</span>
                </label>
            </div>
            <div class="col s12 center">
                {!! Form::submit('Registrarse', ["class" => "btn-large waves-effect waves-light"]) !!}
            </div>
        </div>
    ...
{{ Form::close() }}
