@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('correctivo') }}
            </div>
            <div class="col-12 mb-2">
                <a href="{{ route('correctivo.create') }}" class="btn btn-dark text-white">
                    Nueva solicitud
                </a>
            </div>
            <div class="col-12">
                @if (Auth::user()->hasPermissionTo('Recibir solicitudes  correctivo'))
                    @include('correctivo.partials.atiende')
                @else
                    @include('correctivo.partials.normal')
                @endif
            </div>
        </div>
    </div> 
@endsection