@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('edit-periodo', $periodo) }}
            </div>
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="mb-0">Editar periodo</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::model($periodo, array('route' => array('periodo.update', $periodo->id), 'method' => 'PUT')) !!}
                            <div class="row">
                                @include('periodo.form')
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection