@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-2">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('infraestructura') }}
      </div>
      <div class="col-12 mb-2">
        <a href="{{ route('infraestructura.create') }}" class="btn btn-dark text-white">
          Nueva solicitud
        </a>
      </div>
      @if (Auth::user()->hasPermissionTo('Recibir solicitudes de infraestructura'))
        <div class="col-12">
          @include('infraestructura.partials.atiende')
        </div>
      @else
        @include('infraestructura.partials.normal')
      @endif
    </div>
  </div>
@endsection
