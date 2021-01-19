@extends('dashboard.master')

@section('content')

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user">
                <div>
                    <p class="app-sidebar__user-name">Emma Geller</p>
                    <p class="app-sidebar__user-designation">Enfermero(a)</p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="http://medidesk-web.test/listarCita"><i class="app-menu__icon fa fa-folder"></i><span class="app-menu__label">Citas</span></a></li>
                <li><a class="app-menu__item" href="{{ route('triaje.index') }}"><i class="app-menu__icon fa fa-thermometer-half"></i><span class="app-menu__label">Triajes</span></a></li>
            </ul>
        </aside>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-folder"></i> Citas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                        <thead>
                                            <tr>
                                                <th>DNI Paciente</th>                                            
                                                <th>Fecha de Cita</th>
                                                <th>DNI Médico</th>
                                                <th>Especialidad</th>
                                                <th>Triaje</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cita as $c)
                                                <tr>
                                                    <td>{{ $c->dni_paciente }}</td>                                                
                                                    <td>{{ $c->fecha_cita }}</td>
                                                    <td>{{ $c->dni_medico }}</td>
                                                    @if ($c->especialidad == 1)
                                                        <td>Audiometría</td> 
                                                    @elseif ($c->especialidad == 2)
                                                        <td>Laboratorio</td>
                                                    @elseif ($c->especialidad == 3)
                                                        <td>Oftalmología</td>
                                                    @elseif ($c->especialidad == 4)
                                                        <td>Psicología</td>
                                                    @elseif ($c->especialidad == 5)
                                                        <td>Radiología</td>
                                                    @elseif ($c->especialidad == 6)
                                                        <td>Espirometría</td>
                                                    @elseif ($c->especialidad == 7)
                                                        <td>Odontología</td>                                          
                                                    @endif                                                     


                                                    @if ($c->estado_triaje == 'N')
                                                        <td>Sin Realizar</td> 
                                                        <td><a class="btn btn-sm btn-primary" href="triaje/getIdCita/{{$c->_id}}"><i class="app-menu__icon fa fa-thermometer-half"></i></a></td>
                                                    @else
                                                        <td>Realizado</td>
                                                        <td></td>
                                                    @endif
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