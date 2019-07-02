@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-2">
                    {{ Breadcrumbs::render('new-preventivo') }}
                </div
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header mb-0 bg-white">
                        <h4 class="mb-0">
                            Nuevo Formato
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => 'preventivo.store')) !!}
                            <div class="row">
                                @include('preventivo.form')
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection