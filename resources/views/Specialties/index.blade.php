@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-lg-10 mb-lg-0 mb-4">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex ">
                    <h6 class="mb-0">Especialidades</h6>
                    </div>
                    <div class="col-6 text-end">
                    <a class="btn btn-sm bg-gradient-dark mb-0 font-weight-bold text-xs" href="{{ url('specialties/create') }}"><i class="fas fa-plus"></i>&nbsp; Nueva Especialidad</a>
                    </div>
                </div>           
            </div>
            @if(session('notification'))
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>{{ session('notification') }} </strong>
                </div>
            </div>
            @endif
            <div class="table-responsive p-0">
                <table class="table mb-0">
                <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
                    <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialties as $specialty)            
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $specialty->name }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $specialty->description }}</p>
                    </td>
                    <td class="align-right">
                        <FORM action="{{ url('/specialties/'.$specialty->id.'/delete') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ url('/specialties/'.$specialty->id.'/edit') }}" class="btn btn-sm bg-gradient-info font-weight-bold text-xs"  data-toggle="tooltip" data-original-title="Editar Especialidad">Editar</a>
                            <button type="submit" class="btn btn-sm bg-gradient-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Eliminar Especialidad">Eliminar</button>      
                        </FORM>
                    </td>
                    </tr>
                    @endforeach                  
                </tbody>
                </table>
            </div>
            </div>
        </div>          
    </div>
</div>
@endsection
