<div class="col-md-4 col-12">
  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
    {{ Form::text('name', null, $attributes = $errors->has('name') ? array('placeholder' => 'Nombre(s)', 'class' => 'form-control is-invalid') : array('placeholder' => 'Nombre(s)', 'class' => 'form-control') ) }}
    @if ($errors->has('name'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('name') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-md-4 col-12">
  <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
    {{ Form::email('email', null, $attributes = $errors->has('email') ? array('placeholder' => 'Email', 'class' => 'form-control is-invalid') : array('placeholder' => 'Email', 'class' => 'form-control') ) }}
    @if ($errors->has('email'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('email') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-md-4 col-12">
  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
    {{ Form::password('password', $attributes = $errors->has('password') ? array('placeholder' => 'Contraseña', 'class' => 'form-control is-invalid') : array('placeholder' => 'Contraseña', 'class' => 'form-control') ) }}
    @if ($errors->has('password'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('password') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-md-6 col-12">
  <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
    <label for="">Departamentos</label>
    {!! Form::select('role', $departamentos, null, array('class' => 'form-control')) !!}
    @if ($errors->has('role'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('role') }}</strong>
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
