<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
        {{ Form::text('name', null, $attributes = $errors->has('name') ? array('placeholder' => 'Nombre del periodo', 'class' => 'form-control is-invalid') : array('placeholder' => 'Nombre del periodo', 'class' => 'form-control') ) }}
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('start') ? ' has-danger' : '' }}">
        {{ Form::date('start', null, $attributes = $errors->has('start') ? array('placeholder' => 'Empieza el', 'class' => 'form-control is-invalid') : array('placeholder' => 'Empieza el', 'class' => 'form-control') ) }}
        @if ($errors->has('start'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('start') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group{{ $errors->has('end') ? ' has-danger' : '' }}">
        {{ Form::date('end', null, $attributes = $errors->has('end') ? array('placeholder' => 'Termina el', 'class' => 'form-control is-invalid') : array('placeholder' => 'Termina el', 'class' => 'form-control') ) }}
        @if ($errors->has('end'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('end') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="col-12 mt-3">
    <button class="btn btn-primary">
        Guardar
    </button>
</div>