<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Solicitudes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Solicitudes realizadas por mi</a>
        </li>
    </ul>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Folio</th>
                                    <th>
                                        Jefe del departamento
                                    </th>
                                    <th>
                                        Jefe del área verificada
                                    </th>
                                    <th>
                                        Estatus
                                    </th>
                                    <th>Fecha de solicitud</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $formato)
                                    <tr>
                                        <td>
                                            <span class="badge badge-primary">
                                                {{ $formato->folio }}
                                            </span>
                                        </td>
                                        <td>{{ $formato->role }}</td>
                                        <td>{{ $formato->user->role }}</td>
                                        <td>
                                            @if ($formato->status)
                                                <span class="badge badge-success">
                                                Atendido
                                                </span>
                                            @else
                                            <span class="badge badge-danger">
                                                No Atendido
                                            </span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $formato->created_at->diffForHumans() }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a target="_blank" href="{{ route('pdf.infraestructura', $formato->id) }}" class="btn btn-dark text-white">
                                                    <i class="fas fa-file-pdf"></i>
                                                </a>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ver opciones
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @if ($formato->area->count() >= 1 )
                                                            <a href="{{ route('area.show', $formato->id) }}" class="dropdown-item">
                                                            Detalles
                                                            </a>
                                                        @else
                                                            <a href="{{ route('area.create', $formato->id) }}" class="dropdown-item text-primary">
                                                            Agregar detalles
                                                            </a>
                                                        @endif
                                                        @if(!$formato->status)
                                                            <a href="{{ route('infraestructura.status', $formato->id) }}" class="text-success dropdown-item">Marcar como atendida</a>
                                                        @endif
                                                    </div>
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
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab w-100">
                <p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Folio</th>
                                <th>
                                Jefe del departamento
                                </th>
                                <th>
                                Jefe del área verificada
                                </th>
                                <th>
                                Estatus
                                </th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formatos as $formato)
                                <tr>
                                    <td>
                                        <span class="badge badge-primary">
                                            {{ $formato->folio }}
                                        </span>
                                    </td>
                                    <td>{{ $formato->role }}</td>
                                    <td>{{ $formato->user->role }}</td>
                                    <td>
                                        @if ($formato->status)
                                            <span class="badge badge-success">
                                            Atendido
                                            </span>
                                        @else
                                        <span class="badge badge-danger">
                                            No Atendido
                                        </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a target="_blank" href="{{ route('pdf.infraestructura', $formato->id) }}" class="btn btn-dark text-white">
                                                <i class="fas fa-file-pdf"></i>
                                            </a>
                                            @if ($formato->area->count() >= 1 )
                                                <a href="{{ route('area.show', $formato->id) }}" class="btn btn-primary text-white">
                                                Detalles
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </p>
            </div>
        </div>
    </div>
</div>
