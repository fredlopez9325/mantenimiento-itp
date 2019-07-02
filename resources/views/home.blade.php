@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-2">
            {{ Breadcrumbs::render('home') }}
        </div>
        
        @if(Auth::user()->hasRole('Administrador'))
            @include('home.admin')
        @else
            @if (count($periodo) != 0)
                @include('home.atienden')
            @else
                <div class="col-12">
                    <div class="alert alert-warning">
                        No hay periodos. Consulte con el administrador
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
