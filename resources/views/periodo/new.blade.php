@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('new-periodo') }}
            </div>
            <div class="col-6">
                <div class="card-header">
                    <h5 class="mb-0">
                        Agrega un periodo
                    </h5>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        {!! Form::open(array('route' => 'periodo.store')) !!}
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