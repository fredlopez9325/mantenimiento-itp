<div class="col-md-4 col-12">
  <div class="form-group{{ $errors->has('semestre') ? ' has-danger' : '' }}">
    <label for="">Semestre</label>
    {{ Form::number('semestre', null, $attributes = $errors->has('semestre') ? array('placeholder' => 'Semestre', 'class' => 'form-control is-invalid') : array('placeholder' => 'Semestre', 'class' => 'form-control') ) }}
    @if ($errors->has('semestre'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('semestre') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-md-4 col-12">
  <div class="form-group{{ $errors->has('aprobo') ? ' has-danger' : '' }}">
    <label for="">Aprobó</label>
    {{ Form::text('aprobo', null, $attributes = $errors->has('aprobo') ? array('placeholder' => '', 'class' => 'form-control is-invalid') : array('placeholder' => '', 'class' => 'form-control') ) }}
    @if ($errors->has('aprobo'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('aprobo') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-md-4 col-12">
  <label for="">Periodo</label>
  <div class="form-group{{ $errors->has('periodo_id') ? ' has-danger' : '' }}">
      {{ Form::select('periodo_id', $periodos, null ,$attributes = $errors->has('periodo_id') ? array('class' => 'form-control is-invalid') : array('class' => 'form-control') ) }}
      @if ($errors->has('periodo_id'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('periodo_id') }}</strong>
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