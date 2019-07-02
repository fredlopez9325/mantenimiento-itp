@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 mb-2">
                {{ Breadcrumbs::render('periodo') }}
            </div>
            <div class="col-12">
                <a href="{{ route('periodo.create') }}" class="btn btn-primary text-white mb-1">
                    Nuevo periodo
                </a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">
                            Periodos
                        </h4>
                    </div>
                    <div class="card-body mb-0 p-0" style="overflow: -webkit-paged-x;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre del periodo</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de terminación</th>
                                <th>Fecha de creación</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($periodos->count() < 1)
                                <tr>
                                    <td rowspan="4">

                                        <div class="alert alert-warning">
                                            No hay periodos que mostrar.
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            @foreach($periodos as $periodo)
                                <tr>
                                    <td>{{ $periodo->name }}</td>
                                    <td>{{ $periodo->start }}</td>
                                    <td>{{ $periodo->end }}</td>
                                    <td>{{ $periodo->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('periodo.edit', $periodo->id) }}">Editar</a>
                                                <a class="dropdown-item text-danger" href="{{ route('periodo.destroy', $periodo->id) }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">Eliminar</a>
                                                <form id="delete-form" action="{{ route('periodo.destroy', $periodo->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection