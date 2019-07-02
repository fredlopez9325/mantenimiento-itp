@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row">
      <div class="col-12 mb-2">
        {{ Breadcrumbs::render('profiles') }}
      </div>
      <div class="col-12 mb-2">
        <a href="{{ route('profiles.create') }}" class="btn btn-dark text-white">
          Nuevo usuario
        </a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0">
            <table class="table ">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Departamento</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <div class="btn-group">
                          {!! Form::open(array('route' => array('profiles.destroy', $user->id), 'method' => 'DELETE')) !!}
                            <button class="btn btn-danger text-white">
                              Eliminar
                            </button>
                          {!! Form::close() !!}
                          <a href="{{ route('profiles.edit', $user->id) }}" class="btn btn-success text-white">
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
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
