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
                                <thead class="thead-light">
                                    <tr>
                                        <th>Folio</th>
                                        <th>Área solicitante</th>
                                        <th>Departamento</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $item)
                                        <tr>
                                            <td>
                                                <span class="badge badge-primary">
                                                    {{ $item->folio }}
                                                </span>
                                            </td>
                                            <td>{{ $item->user->role }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>{{ $item->created_at->diffForHumans() }}</td>
                                            <td>
                                                @if ($item->status)
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
                                                    <a href="{{ route('pdf.correctivo', $item->id) }}" class="btn btn-dark text-white">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                    @if (!$item->mantenimiento)
                                                        <a href="{{ route('orden.create', $item->id) }}" class="btn btn-secondary">
                                                            Agregar orden de trabajo.
                                                        </a>
                                                    @else
                                                        <a target="_blank" href="{{ route('pdf.orden', $item->mantenimiento->id) }}" class="btn btn-secondary">
                                                            <i class="fas fa-file-pdf"></i>
                                                            Orden
                                                        </a>
                                                        <a href="{{ route('orden.edit', [$item->mantenimiento->id, $item->id]) }}" class="btn btn-secondary">
                                                            <i class="fas fa-edit"></i>
                                                            Orden
                                                        </a>
                                                    @endif
                                                    @if(!$item->status)
                                                        <a href="{{ route('correctivo.status', $item->id) }}" class="btn btn-primary">
                                                            <i class="fas fa-check"></i>
                                                            Atendida
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-2">
                            {{ $solicitudes->links() }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab w-100">
                    <p>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Folio</th>
                                    <th>Área solicitante</th>
                                    <th>Departamento</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($correctivos as $item)
                                    <tr>
                                        <td>
                                            <span class="badge badge-primary">
                                                {{ $item->folio }}
                                            </span>
                                        </td>
                                        <td>{{ $item->user->role }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($item->status)
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
                                                <a href="{{ route('pdf.correctivo', $item->id) }}" class="btn btn-dark text-white">
                                                    <i class="fas fa-file-pdf"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </p>
                    <div class="col-12 mt-2">
                        {{ $correctivos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
