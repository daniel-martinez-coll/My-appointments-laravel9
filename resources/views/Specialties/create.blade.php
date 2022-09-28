@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Nueva Especialidad</p>
                    <a href="{{ url('specialties') }}"  class="btn btn-dark btn-sm ms-auto">Volver</a>                    
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
                <form action="{{ url('/specialties') }}" method="POST">  
                @csrf         
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre de la especialidad</label>
                                <input class="form-control" name="name" type="text" value="{{old('name') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Descripción de la Especialidad</label>
                                <input class="form-control" name="description" type="text" value="{{old('description') }}">
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
