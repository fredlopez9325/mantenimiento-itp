@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('show-area', $area) }}
            </div>  
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-center">Departamento:
                                    {{  $area->infraestructura }}
                                    <span class="badge badge-dark">{{ $area->role }}</span>
                                </h5>
                            </div>
                            <div class="col-12">
                                <h5 class="text-center">Depto. del área verificada: <strong>{{ $area->user->role }}</strong></h5>
                            </div>
                            <div class="col-12 mt-2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Espacio</th>
                                            <th>Hallazgo</th>
                                            <th>Atendido</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($area->area as $item)
                                            <tr>
                                                <td>{{ $item->espacio_revizado }}</td>
                                                <td>{{ $item->hallazgo }}</td>
                                                <td>{{ $item->atendido }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection