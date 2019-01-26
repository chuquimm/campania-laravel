{!! Form::open(['route' => 'donantes.buscar.correo', 'method' => 'POST', 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <div id="{{ 'modalCampania' . $campania->id }}" class="modal">
        <div class="modal-content">
            <h4>{{ $campania->nombre}}</h4>
            <p>{{ $campania->descripcion}}</p>
            <input type="hidden" name="campania" value="{{ $campania->id}}">

            <div class="row">
                <div class="col s12">
                    <h5>¿Quiéres participar?</h5>
                </div>
                <div class="input-field col s12">
                    <label for="correo">Ingresa tu correo:</label>
                    <input type="email" name="correo" id="correo" class="validate" required>
                </div>
                {{-- <div class="col s4">
                    <a class="btn-large waves-effect waves-block waves-light">Si</a>
                </div>
                <div class="col s4">
                <a href="{{ route('donantes.create', $campania->id) }}" class="btn-large waves-effect waves-light waves-block">No</a>
                </div> --}}
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <button type="submit" class="waves-effect waves-green btn-flat">Participar</button>
            {{-- <a href="#!" class="waves-effect waves-green btn-flat">Participar</a> --}}
        </div>
    </div>
{{ Form::close() }}