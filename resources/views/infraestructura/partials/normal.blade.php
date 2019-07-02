<div class="col-12">
    <div class="card">
        <div class="card-body p-0">
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
                        @if (Auth::user()->hasPermissionTo('Recibir solicitudes de infraestructura'))     
                            @if ($formato->area->count() >= 1)
                                <a href="{{ route('area.show', $formato->id) }}" class="btn btn-primary text-white">
                                Detalles
                                </a>
                            @else
                                <a href="{{ route('area.create', $formato->id) }}" class="btn btn-primary">
                                Agregar detalles
                                </a>
                            @endif
                        @endif
                        </div>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
        {{ $formatos->links() }}
        </div>
    </div>
</div>