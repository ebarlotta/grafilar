@extends('layouts.app')

@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  --}}


    <!-- Modal -->
    <div class="modal fade show" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                            <div class="p-4 w-100">
                                <div class="text-center mb-4">
                                    <i class="bi bi-camera" style="font-size: 2rem;"></i>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Recuérdame</label>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="#">¿Olvidaste tu contraseña?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">INICIAR SESIÓN</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ asset('fotos/login1.jpeg') }}" alt="Imagen" class="img-fluid h-100 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
