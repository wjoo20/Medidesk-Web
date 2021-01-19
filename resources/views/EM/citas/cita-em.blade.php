@extends('EM.master')

@section('content')
    
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Exámenes Médicos</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Citas</a></li>
            </ul>
        </div>

        <div class="">
            <div class="col-sm-9">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                        <thead>
                                            <tr>
                                                <th>Dni</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($citas as $cita)
                                                <tr>             
                                                    <td><a href="/em/diagnostico/{{ $cita['cita']['dni'] }}/{{ $cita['fecha'] }}/{{ $cita['cita']['nombre'] }}/{{ $cita['cita']['apellido'] }}">{{ $cita['cita']['nombre'] }}</a></td>
                                                    <td>{{ $cita['cita']['apellido'] }}</td>
                                                    <td>{{ $cita['cita']['dni'] }}</td>
                                                </tr>                                               
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-3">
                <form action="/em/citas/{{$idEsp}}/filtrarDni" method="POST"> 
                    @csrf   
                    <div class="form-group">
                        <label for="dni">Dni:</label>
                        <div class="input-group" id="">
                            <input type="numeric" class="form-control" placeholder="Ingrese dni" id="dni" name="dni">
                            <span class="input-group-addon">
                                <button type="submit" class="fa fa-search"></button>
                            </span>
                        </div>                        
                    </div>
                </form> 

                <form action="/em/citas/{{$idEsp}}/filtrarFecha" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <div class="input-group" id="datetimepicker1">
                            <input type="text" class="form-control" name="fecha">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                                  
            </div>
        </div>
    </main>
@endsection
