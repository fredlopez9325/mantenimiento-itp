@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('new-orden', $correctivo) }}
            </div>
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            Agregar orden de trabajo
                        </h5>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => ['orden.store', $correctivo->id])) !!}
                            <div class="row">
                                @include('mantenimiento.form')
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection