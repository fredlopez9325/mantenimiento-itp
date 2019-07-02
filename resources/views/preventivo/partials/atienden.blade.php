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
                                        <th>Semestre</th>
                                        <th>Año</th>
                                        <th>Fecha de elaboración</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $item)
                                        <tr>
                                            <td>{{ $item->semestre }}</td>
                                            <td>{{ $item->año }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <a href="{{ route('pdf.preventivo', $item->id) }}" class="btn btn-dark">
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
                </div>
                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab w-100">
                    <p>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Semestre</th>
                                    <th>Año</th>
                                    <th>Fecha de elaboración</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($preventivos as $item)
                                    <tr>
                                        <td>{{ $item->semestre }}</td>
                                        <td>{{ $item->año }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <a href="{{ route('pdf.preventivo', $item->id) }}" class="btn btn-dark">
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
                    </p>
                </div>
            </div>
        </div>
    </div>