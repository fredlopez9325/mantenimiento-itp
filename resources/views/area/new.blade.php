@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <div class="row">
            <infraestructura id="{{ $formato->id }}"></infraestructura>
        </div>
    </div>
@endsection