@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Editar Especialidad</p>
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

                <form action="{{ url('specialties/'.$specialty->id) }}" method="POST">  
                @csrf 
                @method('PUT')   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre de la especialidad</label>
                                <input class="form-control" name="name" type="text" value="{{old('name', $specialty->name) }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Descripción de la Especialidad</label>
                                <input class="form-control" name="description" type="text" value="{{old('description', $specialty->description) }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                 
                    </div>
                    
                </form>       
            </div>
        </div>
    </div> 
</div>
@endsection
