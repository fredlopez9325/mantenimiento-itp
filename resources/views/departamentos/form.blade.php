<div class="col-md-6 col-12">
  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
    {{ Form::text('name', null, $attributes = $errors->has('name') ? array('placeholder' => 'Nombre', 'class' => 'form-control is-invalid') : array('placeholder' => 'Nombre', 'class' => 'form-control') ) }}
    @if ($errors->has('name'))
      <div class="invalid-feedback">
          <strong>{{ $errors->first('name') }}</strong>
      </div>
    @endif
  </div>
</div>

<div class="col-12">
  <div class="d-flex align-content-start flex-wrap">
    @foreach ($permisos as $item)
      <div class="item mr-3">
        {!! Form::checkbox('permisos[]', $item->id, in_array($item->id, $selectedRoles) ? true : false, $attributes =  array('class' => '')) !!}
        <label class="">
          {{ $item->name }}
        </label>
      </div>
    @endforeach
  </div>
</div>

<div class="col-12 mt-2">
  <hr>
  <div class="form-group">
    <button class="btn btn-primary">
      Guardar
    </button>
  </div>
</div>
