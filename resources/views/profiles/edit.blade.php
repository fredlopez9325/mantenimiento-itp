@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('edit-profile', $user) }}
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header mb-0 bg-white">
            <h4 class="card-title mb-0">
              Editar usuario
            </h4>
          </div>
          <div class="card-body">
            {!! Form::model($user, array('route' => array('profiles.update', $user->id), 'method' => 'PUT')) !!}
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
