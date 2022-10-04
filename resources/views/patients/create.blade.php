@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Nuevo Paciente</p>
                    <a href="{{ url('patients') }}"  class="btn btn-dark btn-sm ms-auto">Volver</a>                    
                </div>
            </div>
            <div class="card-body"> 
                @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                </ul>
                @endif
                <form action="{{ url('/patients') }}" method="POST">  
                @csrf 
                    <p class="text-uppercase text-sm">Información del Médico</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nombre de Usuario</label>
                              <input class="form-control" type="text" name="name" type="text" value="{{old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Correo electrónico</label>
                              <input class="form-control" type="email" name="email" value="{{old('email') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">DNI</label>
                              <input class="form-control" type="text" name="dni" type="text" value="{{old('dni') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nombre</label>
                              <input class="form-control" type="text" name="firstName" type="text" value="{{old('firstName') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Apellido</label>
                              <input class="form-control" type="text" name="lastName" type="text" value="{{old('lastName') }}">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Información del contacto</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Dirección</label>
                              <input class="form-control" type="text" name="address" type="text" value="{{old('address') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Teléfono</label>
                            <input class="form-control" type="text" name="phone" type="text" value="{{old('phone') }}">
                          </div>
                      </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Provincia</label>
                              <input class="form-control" type="text" name="city" type="text" value="{{old('city') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">País</label>
                              <input class="form-control" type="text" name="country" type="text" value="{{old('country') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Código Postal</label>
                              <input class="form-control" type="text" name="postalCode" type="text" value="{{old('postalCode') }}">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Seguridad</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Contraseña</label>                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label"> Repetir Contraseña</label>  
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password" required>
                            </div>
                        </div>
                    </div> 

                    <div class="col-md-12">
                      <div class="text-center">
                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cargar</button>
                      </div>     
                    </div> 
                </form>        
            </div>
        </div>
    </div> 
</div>
@endsection
