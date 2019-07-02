<div class="col-md-6 col-12">
    <div class="form-group{{ $errors->has('numero_control') ? ' has-danger' : '' }}">
        <label for="">Número de control</label>
        {{ Form::number('numero_control', null, $attributes = $errors->has('numero_control') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
        @if ($errors->has('numero_control'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('numero_control') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-md-6 col-12">
    <div class="form-group{{ $errors->has('mantenimiento') ? ' has-danger' : '' }}">
        <label for="">Mantenimiento</label>
        {!! Form::select('mantenimiento', ['Interno' => 'Interno', 'Externo' => 'Externo'], null, array('class' => 'form-control')) !!}
        @if ($errors->has('mantenimiento'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('mantenimiento') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('tipo_servicio') ? ' has-danger' : '' }}">
        <label for="">Tipo de servicios</label>
        {{ Form::text('tipo_servicio', null, $attributes = $errors->has('tipo_servicio') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
        @if ($errors->has('tipo_servicio'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('tipo_servicio') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('asignado_a') ? ' has-danger' : '' }}">
        <label for="">Asignado a:</label>
        {{ Form::text('asignado_a', null, $attributes = $errors->has('asignado_a') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
        @if ($errors->has('asignado_a'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('asignado_a') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('trabajo_realizado') ? ' has-danger' : '' }}">
        <label for="">Trabajo realizado:</label>
        {{ Form::textarea('trabajo_realizado', null, $attributes = $errors->has('trabajo_realizado') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
        @if ($errors->has('trabajo_realizado'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('trabajo_realizado') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('verificado') ? ' has-danger' : '' }}">
        <label for="">Verificado y liberado por:</label>
        {{ Form::text('verificado', null, $attributes = $errors->has('verificado') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
        @if ($errors->has('verificado'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('verificado') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="col-12 mt-3">
    <button class="btn btn-primary">
        Guardar
    </button>
</div>