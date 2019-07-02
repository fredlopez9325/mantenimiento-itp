<div class="col-md-6 col-12">
  <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
    <label for="">Selecciona el departamento</label>
    {!! Form::select('role', $departamentos, null, array('class' => 'form-control')) !!}
    @if ($errors->has('role'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('role') }}</strong>
      </div>
    @endif
  </div>
</div>
<div class="col-md-12 col-12">
  <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
    <label for="">Descripción</label>
    {{ Form::textarea('descripcion', null, $attributes = $errors->has('descripcion') ? array('placeholder' => 'Descripción', 'class' => 'form-control is-invalid') : array('placeholder' => 'Descripción', 'class' => 'form-control') ) }}
    @if ($errors->has('descripcion'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('descripcion') }}</strong>
      </div>
    @endif
  </div>
</div>
<div class="col-12">
    <div class="form-group">
        <button class="btn btn-primary">
            Guardar
        </button>
    </div>
</div>