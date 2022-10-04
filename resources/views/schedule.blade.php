@extends('layouts.panel')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-lg-10 mb-lg-0 mb-4">
        <form action="{{'/schedule'}}" method="POST" >
            @csrf
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex ">
                        <h6 class="mb-0">Gestionar Horarios</h6>
                        </div>
                        <div class="col-6 text-end">
                        <button class="btn btn-sm bg-gradient-dark mb-0 font-weight-bold text-xs" type="submit"><i class="fas fa-plus"></i>Guardar Cambios</button>
                        </div>
                    </div>           
                </div>    
                        
                <div class="card-body">
                    @if(session('notification'))
                    <div class="alert alert-success" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>{{ session('notification') }} </strong>
                    </div>
                    @endif        
                    <div class="table-responsive p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Día</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Turno Mañana</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Turno Tarde</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($days as $key => $day)
                                    <tr>
                                        <th> {{ $day}} </th>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="active[]" value="{{$key}}" id="flexSwitchCheckDefault" checked="">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Checked switch</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <select class="form-control" name="morning_start[]">
                                                        @for ($i=8; $i<=13; $i++)
                                                            <option Value="{{$i}}:00">{{$i}}:00</option>
                                                            <option Value="{{$i}}:30">{{$i}}:30</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="morning_end[]">
                                                        @for ($i=8; $i<=13; $i++)
                                                            <option Value="{{$i}}:00">{{$i}}:00</option>
                                                            <option Value="{{$i}}:30">{{$i}}:30</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <select class="form-control" name="afternoon_start[]">
                                                        @for ($i=14; $i<=22; $i++)
                                                            <option Value="{{$i}}:00">{{$i}}:00</option>
                                                            <option Value="{{$i}}:30">{{$i}}:30</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="afternoon_end[]">
                                                        @for ($i=14; $i<=22; $i++)
                                                            <option Value="{{$i}}:00">{{$i}}:00</option>
                                                            <option Value="{{$i}}:30">{{$i}}:30</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach              
                            </tbody>
                        </table>                 
                    </div>                        
                </div> 
            </div>
        </form>                 
    </div>    
</div>
@endsection
