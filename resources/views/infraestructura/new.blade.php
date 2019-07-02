@extends('layouts.app')

@section('content')
  <div class="container mt-2">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('new-infraestructura') }}
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header mb-0 bg-white">
            <h4 class="mb-0 card-title">
              Nueva solicitud
            </h4>
          </div>
          <div class="card-body">
            {!! Form::open(array('route' => 'infraestructura.store')) !!}
              <div class="row">
                @include('infraestructura.form')
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
