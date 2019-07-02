@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('svg/logo_principal.svg') }}" alt="" class="img-fluid" style="margin-top: 3em">
            </div>
            @guest
                <div class="col-5 offset-1">
                    <div class="card">
                        <div class="card-header mb-0 bg-white">{{ __('Iniciar sesión') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group ">
                                    <label for="email" class="">{{ __('E-mail') }}</label>

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label for="password" class="">{{ __('Contraseña') }}</label>

                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Entrar') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-6 text-center" style="margin-top: 10em">
                    <a href="{{ route('home') }}" class="btn btn-primary text-white">
                        Regresar al panel de administración
                    </a>
                </div>
            @endguest
        </div>
    </div>
@endsection
