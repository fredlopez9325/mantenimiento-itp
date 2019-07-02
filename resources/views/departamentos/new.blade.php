@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mb-2">
          {{ Breadcrumbs::render('new-departamento') }}
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header mb-0 pb-0 bg-white">
            <h4 class="card-title">Nuevo departamento</h4>
          </div>
          <div class="card-body">
            {!! Form::open(array('route' => 'departamentos.store')) !!}
              <div class="row">
                @include('departamentos.form')
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
