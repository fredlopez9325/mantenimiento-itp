<div class="card">
    <div class="card-header mb-0">
    </div>
    <div class="card-body p-0 m-0">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Semestre</th>
                    <th>Periodo</th>
                    <th>Fecha de elaboración</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($preventivos as $item)
                    <tr>
                        <td>{{ $item->semestre }}</td>
                        <td>{{ $item->periodo->name }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="btn-group">
                                <form id="delete-preventivo-form" action="{{ route('preventivo.destroy', $item->id) }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                </form>
                                <button class="btn btn-danger" onclick="event.preventDefault();
                                document.getElementById('delete-preventivo-form').submit();">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <a target="_blank" href="{{ route('pdf.preventivo', $item->id) }}" class="btn btn-dark">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                                @if ($item->plains->count() < 1)
                                    <a href="{{ route('plan.index', $item->id) }}" class="btn btn-primary text-white">
                                        Agregar plan
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>