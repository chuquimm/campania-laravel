@include('partials.errorToast')

{!! Form::open(['route' => $formArgs['route'], 'method' => $formArgs['method'], 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <div class="row">
            @if ($campania_id != null)
                <input type="hidden" name="campania" value={{$campania_id}}>
            @endif
            <div class="input-field col s6">
                {!! Form::text('nombre', isset($donante)?$donante->nombre:null, ['id' => 'nombre', 'type' => 'text', 'class' => 'validate', 'required']) !!}
                {!! Form::label('nombre', 'Nombre') !!}
            </div>

            <div class="input-field col s6">
                {!! Form::text('apellido', isset($donante)?$donante->apellido:null, ['id' => 'apellido', 'type' => 'text', 'class' => 'validate', 'required'] ) !!}
                {!! Form::label('apellido', 'Apellido') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::email('correo', isset($donante)?$donante->correo:null, ['id' => 'correo', 'class' => 'validate', 'required']) !!}
                {!! Form::label('correo', 'Correo') !!}
            </div>
        </div>

        <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="dni" id="dni", class="validate" maxlength="8" minlength="8" required value={!!isset($donante)?$donante->dni:null!!}>
                    {{-- {!! Form::number('dni', null, ['id' => 'dni', 'class' => 'validate', 'maxlength'=>8, 'required']) !!} --}}
                    {!! Form::label('dni', 'DNI') !!}
                </div>

                <div class="input-field col s6">
                    <input type="text" name="celular" id="celular", class="validate" maxlength="9" minlength="9" required value={!!isset($donante)?$donante->celular:null!!}>
                    {{-- {!! Form::number('celular', null, ['id' => 'celular', 'class' => 'validate', 'maxlength'=>9, 'required'] ) !!} --}}
                    {!! Form::label('celular', 'Celular') !!}
                </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::date('fnacimiento', isset($donante)?$donante->fnacimiento:null, ['class' => 'datepicker']) !!}
                {!! Form::label('fnacimiento', 'Fecha de Nacimiento') !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::select('genero', [true => 'Masculino', false => 'Fememnino'] , isset($donante)?$donante->genero==0?false:true:null) !!}
                {!! Form::label('genero', 'Genero') !!}
            </div>
        </div>

        <div class="row sangre">
            <div class="input-field col s4">
                {!! Form::select('sangre', ['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], isset($donante)?$donante->tiposangre_id<3?'A':$donante->tiposangre_id<5?'B':$donante->tiposangre_id<7?'AB':$donante->tiposangre_id<9?'O':null:null, ['id' => 'sangre'])!!}
                {!! Form::label('sangre', 'Sangre') !!}
            </div>

            <div class="input-field col s4">
                {!! Form::select('factor', ['+' => '+', '-' => '-'], isset($donante)?$donante->tiposangre_id<9?$donante->tiposangre_id%2==0?'-':'+':null:null, ['id' => 'factor']) !!}
                {!! Form::label('factor', 'Factor') !!}
            </div>

            <div class="col s4">
                <label>
                    {!! Form::checkbox('checkSangre', null, isset($donante)?$donante->tiposangre_id==9?true:false:null , ['id' => 'checkSangre', 'class' => 'chk']) !!}
                    <span>No conozco mi tipo de sangre</span>
                </label>
            </div>
        </div>

        <div class="row" id="lugar">
            <div class="input-field col s4 departamento">
                <select name="departamento" id="departamento" placeholder="Departamento">
                    {{-- {!! isset($donante)?'<option value=""  disabled selected>Departamento</option>':'' !!} --}}
                    <option value="" {!! isset($donante)?'':'selected' !!} disabled>Departamento</option>
                    @foreach ($departamentos as $id => $departamento)
                        <option value="{!! $id !!}" {!! isset($donante)?($id==$donante->distrito->departamento->id)?'selected':'':'' !!}>{!! $departamento !!}</option>
                    @endforeach
                </select>
                <label for="departamento">Departamento</label>
            </div>
            
            <div class="input-field col s4 provincia">
                <select name="provincia" id="provincia" placeholder="Provincia">
                    @if (isset($donante))
                    <option value="" disabled>Provincia</option>
                    @foreach ($donante->distrito->departamento->provincias->pluck("nombre","id"); as $id => $provincia)
                    <option value="{!! $id !!}" {!! ($id==$donante->distrito->provincia->id)?'selected':'' !!}>{!! $provincia !!}</option>
                    @endforeach
                    @else
                    <option value="" disabled selected>Provincia</option>
                    @endif
                </select>
                <label for="provincia">Provincia</label>
            </div>
            
            <div class="input-field col s4 distrito">
                <select name="distrito" id="distrito" placeholder="distrito">
                        @if (isset($donante))
                        <option value="" disabled>Distrito</option>
                        @foreach ($donante->distrito->departamento->distritos->pluck("nombre","id"); as $id => $distrito)
                        <option value="{!! $id !!}" {!! ($id==$donante->distrito_id)?'selected':'' !!}>{!! $distrito !!}</option>
                        @endforeach
                        @else
                        <option value="" disabled selected>Distrito</option>
                        @endif
                </select>
                <label for="distrito">Distrito</label>
            </div>
            
        <div class="row">
            <div class="col s4 m12 center">
                <img src="{{ Storage::url(isset($donante)?$donante->foto:'avatar.png') }}" alt="" class="circle responsive-img" width="20%">
            </div>
            <div class="col s4 m12 center">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="foto" value="avatar.png" accept="image/*">
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
                        {!! Form::checkbox("sms", null , isset($donante)?$donante->sms:true) !!}
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
                {!! Form::submit($formArgs['submit'], ["class" => "btn-large waves-effect waves-light"]) !!}
            </div>
        </div>
    ...
{{ Form::close() }}
