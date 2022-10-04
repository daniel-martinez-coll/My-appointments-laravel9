@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Modificar Paciente</p>
                    <a href="{{ url('patients') }}"  class="btn btn-dark btn-sm ms-auto">Volver</a>                    
                </div>
            </div>
            <div class="card-body"> 
                @if ($errors->any())
                <ul>
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)                    
                            <p>{{$error}} <p>                   
                        @endforeach
                    </div>
                </ul>
                @endif
                <form action="{{ url('/patients/'.$patient->id) }}" method="POST">  
                @csrf                
                @method('PUT')  
                    <p class="text-uppercase text-sm">Información del Paciente</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nombre de Usuario</label>
                              <input class="form-control" type="text" name="name" type="text" value="{{old('name', $patient->name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Correo electrónico</label>
                              <input class="form-control" type="email" name="email" value="{{old('email', $patient->email) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">DNI</label>
                              <input class="form-control" type="text" name="dni" type="text" value="{{old('dni', $patient->dni) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nombre</label>
                              <input class="form-control" type="text" name="firstName" type="text" value="{{old('firstName', $patient->firstName) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Apellido</label>
                              <input class="form-control" type="text" name="lastName" type="text" value="{{old('lastName', $patient->lastName) }}">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Dirección</label>
                              <input class="form-control" type="text" name="address" type="text" value="{{old('address', $patient->address) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Teléfono</label>
                            <input class="form-control" type="text" name="phone" type="text" value="{{old('phone', $patient->phone) }}">
                          </div>
                      </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Provincia</label>
                              <input class="form-control" type="text" name="city" type="text" value="{{old('city', $patient->city) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">País</label>
                              <input class="form-control" type="text" name="country" type="text" value="{{old('country', $patient->country) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Código Postal</label>
                              <input class="form-control" type="text" name="postalCode" type="text" value="{{old('postalCode', $patient->postalCode) }}">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Seguridad</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Contraseña</label>                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="contraseña" name="password"  autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <p class="text-xs text-secondary mb-0">Ingresar datos solo si desea cambiar la contraseña</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label"> Repetir Contraseña</label>  
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Contraseña"  autocomplete="new-password">
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
