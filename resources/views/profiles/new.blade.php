@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('new-profile') }}
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header mb-0 bg-white">
            <h4 class="card-title mb-0">
              Nuevo usuario
            </h4>
          </div>
          <div class="card-body">
            {!! Form::open(array('route' => 'profiles.store')) !!}
              <div class="row">
                @include('profiles.form')
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
