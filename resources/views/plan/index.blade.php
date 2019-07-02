@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('plan-area', $preventivo) }}
            </div
        </div>
    </div>
    <div class="container" id="app">
        <plain id="{{ $preventivo->id }}"></plain>
    </div>
@endsection
