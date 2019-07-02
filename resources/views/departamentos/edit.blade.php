@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('edit-departamento', $departamento) }}
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header mb-0 pb-0 bg-white">
            <h4 class="card-title">Editar</h4>
          </div>
          <div class="card-body">
            {!! Form::model($departamento, array('route' => array('departamentos.update', $departamento->id), 'method' => 'PUT')) !!}
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
