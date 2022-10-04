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
                    <p class="text-uppercase text-sm">Paciente Información</p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre</label>
                            <input class="form-control" name="name" type="text" value="{{old('name') }}">
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">DNI</label>
                            <input class="form-control" type="text" name="dni" value="{{old('dni') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Correo</label>
                            <input class="form-control" type="email" name="email" value="{{old('email') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Contraseña</label>                        
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>


                    
                    </div>                 
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cargar</button>
                        </div>
                    </div>
                                         
                    </div> 
                </form>        
            </div>
        </div>
    </div> 
</div>
@endsection
