@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-2">
                    {{ Breadcrumbs::render('preventivo') }}
                </div
            </div>
            <div class="col-12 mb-2">
                <a href="{{ route('preventivo.create') }}" class="btn btn-dark text-white">
                    Nuevo Formato
                </a>
            </div>
            <div class="col-12">
                @include('preventivo.partials.normal')
            </div>
        </div>
    </div>
@endsection