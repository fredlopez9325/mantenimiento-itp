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
                <td>{{ $item->folio }}</td>
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
                        <a target="_blank" href="{{ route('pdf.correctivo', $item->id) }}" class="btn btn-dark text-white">
                            <i class="fas fa-file-pdf"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="col-12 mt-2">
    {{ $correctivos->links() }}
</div>
