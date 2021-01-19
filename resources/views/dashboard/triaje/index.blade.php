<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <link rel="icon" href="../img/logo-64.png">
    <title>MediDesk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <!-- Font-icon css-->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    
    
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">MediDesk</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
        
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ route('logout') }}" 
                    
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i>
    {{ __('Logout') }}
                                    
            </a> </li>
    
            </ul>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user">
                <div>
                    <p class="app-sidebar__user-name">{{Auth::user()->email}}</p>
                    <p class="app-sidebar__user-designation">{{Auth::user()->tipo}}</p>
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
                                            <th>Perímetro Abdominal</th>
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

        <!-- Scripts -->
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <script type="text/javascript">
            $('#sampleTable').DataTable();
        </script>
    
</body>

</html>   
