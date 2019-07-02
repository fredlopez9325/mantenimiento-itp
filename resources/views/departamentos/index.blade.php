@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-3">
      <div class="col-12 mb-2">
          {{ Breadcrumbs::render('departamentos') }}
      </div>
      <div class="col-12 mb-2">
        <a href="{{ route('departamentos.create') }}" class="btn btn-dark text-white">
          Nuevo departamento
        </a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0 table-responsive">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($departamentos as $depto)
                  <tr>
                    <td>
                      {{ $depto->name }}
                    </td>
                    <td>
                      <div class="btn-group">
                        {!! Form::open(array('route' => array('departamentos.destroy', $depto->id), 'method' => 'DELETE')) !!}
                          <button class="btn btn-danger text-white">
                            Eliminar
                          </button>
                        {!! Form::close() !!}
                        <a href="{{ route('departamentos.edit', $depto->id) }}" class="btn btn-success text-white">
                          Editar
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {{ $departamentos->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
