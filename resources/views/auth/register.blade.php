@extends('layouts.form')

@section('title', 'Registro')

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenidos!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5><div class="card-header">{{ __('Registrarse') }}</div></h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre Completo" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="contraseña" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Contraseña" required autocomplete="new-password">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Acepta los <a href="javascript:;" class="text-dark font-weight-bolder">Terminos y Condiciones</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                    {{ __('Registrarse') }}
                </button>
                </div>
                <p class="text-sm mt-3 mb-0">Ya tienes una cuenta? 
                    <a class="text-dark font-weight-bolder" href="{{ route('login') }}">
                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                        Ingresar
                    </a> 
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
