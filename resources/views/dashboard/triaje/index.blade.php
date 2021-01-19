@extends('dashboard.master')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-thermometer-half"></i> Triajes</h1>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                        @include('dashboard.partials.alert-message')
                            <br>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Dni Paciente</th>
                                        <th>Peso</th>
                                        <th>Talla</th>
                                        <th>Cintura</th>
                                        <th>Cadera</th>
                                        <th>Presión Arterial</th>
                                        <th>Frecuencia Cardiaca</th>
                                        <th>Frecuencia Respiratoria</th>
                                        <th>Saturación Oxigeno</th>
                                        <th>Temperatura</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($triaje as $t)

                                        <tr>
                                        
                                            <td>
                                            @foreach ($cita as $c)
                                                @if ($c->_id == $t->id_cita)                                            
                                                    {{ $c->dni_paciente }}
                                                @endif
                                            @endforeach                                                
                                            </td>                                      
                                            
                                            <td>{{ $t->peso }}</td>
                                            <td>{{ $t->talla }}</td>
                                            <td>{{ $t->cintura }}</td>
                                            <td>{{ $t->cadera }}</td>
                                            <td>{{ $t->presion_arterial }}</td>
                                            <td>{{ $t->frecuencia_cardiaca }}</td>
                                            <td>{{ $t->frecuencia_respiratoria }}</td>
                                            <td>{{ $t->saturacion_oxigeno }}</td>
                                            <td>{{ $t->temperatura }}</td>
                                            <td><a class="btn btn-sm btn-primary" href="{{route('triaje.edit',$t->_id)}}"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="/triaje/eliminar?triaje_id={{$t->_id}}" onclick="return confirm('¿Esta seguro de eliminar este registro?')" class="btn btn-sm  btn-danger"><i class="fa fa-trash"></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>    



@endsection