
@extends('layouts.app')

@section('content')
    

  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">MediDesk</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
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
        <li><a class="app-menu__item" href="/inicio"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="/registrarUsuario"><i class="icon fa fa-circle-o"></i> Crear Usuario</a></li>
           
            <li><a class="treeview-item" href="/medicos"><i class="icon fa fa-circle-o"></i> Médicos</a></li>
            <li><a class="treeview-item" href="/enfermeros"><i class="icon fa fa-circle-o"></i> Enfermeros</a></li>
            <li><a class="treeview-item" href="/administradores"><i class="icon fa fa-circle-o"></i> Administradores</a></li>
            <li><a class="treeview-item" href="/empresas"><i class="icon fa fa-circle-o"></i> Empresas</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="/turnos" target="_blank"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Turnos</span></a></li>

    </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Crear Usuarios</h1>
          <p>En esta sección se dispone de un formulario para registrar un nuevo usuario.</p>
        </div>

      </div>
     

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Crear Usuario</div>

                <div class="card-body">
                    <form method="POST" action="/registrarUsuario">
                        @csrf

                        
                        <div id= '1' style="display: none;">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de la Empresa:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"value="{{ old('name') }}"  >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

   <div id= '2' style="display: none;">
                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres:</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}">

                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div id= '3' style="display: none;">
                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}"  >

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div id= '16' style="display: none;">
                            <div class="form-group row">
                                <label for="fec_nac" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento:</label>
    
                                <div class="col-md-6">
                                    <input id="fec_nac" type="date" class="form-control @error('fec_nac') is-invalid @enderror" name="fec_nac" value="{{ old('fec_nac') }}"  >
    
                                    @error('fec_nac')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>


                            <div id= '26' style="display: none;">
                                <div class="form-group row">
                                    <label for="edad" class="col-md-4 col-form-label text-md-right">Edad:</label>
        
                                    <div class="col-md-6">
                                        <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}"  >
        
                                        @error('edad')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>


                                <div id= '46' style="display: none;">
                                    <div class="form-group row">
                                      <legend class="col-md-4 col-form-label text-md-right">Género:</legend>
                                      <div class="col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Femenino" @if(old('gridRadios')) checked @endif>
                                          <label class="form-check-label" for="gridRadios1">
                                           Femenino
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Masculino" @if(!old('gridRadios')) checked @endif>
                                          <label class="form-check-label" for="gridRadios2">
                                            Masculino
                                          </label>
                                        </div>
                                       
                                      </div>
                                    </div>
                                    </div>
                             
                                    <div id= '100' style="display: none;">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono:</label>
                
                                            <div class="col-md-6">
                                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}">
                
                                                @error('telefono')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                    <div id= '10' style="display: none;">
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección:</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}">

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div id= '11' style="display: none;">
                        <div class="form-group row">
                            <label for="ruc" class="col-md-4 col-form-label text-md-right">RUC:</label>

                            <div class="col-md-6">
                                <input id="ruc" type="text" class="form-control @error('ruc') is-invalid @enderror" name="ruc" value="{{ old('ruc') }}">

                                @error('ruc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                 

                        <div id= '4' style="display: none;">
                        <div class="form-group row">
                            <label for="Dni" class="col-md-4 col-form-label text-md-right">Dni:</label>

                            <div class="col-md-6">
                                <input id="Dni" type="text" class="form-control @error('Dni') is-invalid @enderror" name="Dni" value="{{ old('Dni') }}" >

                                @error('Dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                       
                        <div class="form-group row">
                            
                                <label for="Tipo" class="col-md-4 col-form-label text-md-right">Tipo de Usuario:</label>
                                <div class="col-md-6">
                                <select class="form-control" id="Tipo" name="Tipo" onChange="mostrar(this.value);">
                                  <option></option>
                                    <option value="medico" >Médico</option>
                                  <option value="admision">Administrador</option>
                                  <option value="enfermera">Enfermera</option>
                                  <option value="empresa">Empresa</option>
                         
                                </select>
                          


                                @error('Tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div id='6' style="display: none;">
                            <div class="form-group row">
                            
                                <label for="Especialidad" class="col-md-4 col-form-label text-md-right">Especialidad:</label>
                                <div class="col-md-6">
                                <select class="form-control" id="Especialidad" name="Especialidad" onChange="mostrar(this.value);">
                                  <option></option>
                                    <option value="audiometria" @if (old('Especialidad') == "audiometria") {{ 'selected' }} @endif>Audiometría</option>
                                  <option value="laboratorio" @if (old('Especialidad') == "laboratorio") {{ 'selected' }} @endif>Laboratorio</option>
                                  <option value="oftalmologia" @if (old('Especialidad') == "oftalmologia") {{ 'selected' }} @endif>Oftalmología</option>
                                  <option value="psicologia" @if (old('Especialidad') == "psicologia") {{ 'selected' }} @endif>Psicología</option>
                                  <option value="radiologia" @if (old('Especialidad') == "radiologia") {{ 'selected' }} @endif>Radiología</option>
                                  <option value="espirometria" @if (old('Especialidad') == "espirometria") {{ 'selected' }} @endif>Espirometría</option>
                                  <option value="odontologia" @if (old('Especialidad') == "odontologia") {{ 'selected' }} @endif>Odontología</option>
                         
                                </select>
                          


                                @error('Especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                       

                        <div id= '7' style="display: none;">
                        <div class="form-group row">
                            <label for="ColegioMedico" class="col-md-4 col-form-label text-md-right">CMP:</label>

                            <div class="col-md-6">
                                <input id="ColegioMedico" type="text" class="form-control @error('ColegioMedico') is-invalid @enderror" name="ColegioMedico" value="{{ old('ColegioMedico') }}" autocomplete="ColegioMedico">

                                @error('ColegioMedico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div id= '77' style="display: none;">
                        <div class="form-group row">
                            <label for="ColegioEnfermero" class="col-md-4 col-form-label text-md-right">CEP:</label>

                            <div class="col-md-6">
                                <input id="ColegioEnfermero" type="text" class="form-control @error('ColegioEnfermero') is-invalid @enderror" name="ColegioEnfermero" value="{{ old('ColegioEnfermero') }}" autocomplete="ColegioEnfermero">

                                @error('ColegioEnfermero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                 
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                 
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      

                      
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    </main>



    <script type="text/javascript">
   

 function mostrar(id) {
        if (id == "medico") {
            $("#2").show();
            $("#3").show();
            $("#16").show();
            $("#26").show();
            $("#46").show();
            $("#100").show();
            $("#10").show();
            $("#4").show();
            $("#6").show();
            $("#7").show();
            $("#1").hide();
            $("#11").hide();      
            $("#77").hide();

        }
        if (id == "") {
            $("#2").hide();
            $("#3").hide();
            $("#16").hide();
            $("#26").hide();
            $("#46").hide();
            $("#100").hide();
            $("#10").hide();
            $("#4").hide();
            $("#6").hide();
            $("#7").hide();
            $("#1").hide();  
            $("#11").hide();
         
           
            $("#77").hide();
        }
        if (id == "admision") {
            $("#2").show();
            $("#3").show();
            $("#16").show();
            $("#26").show();
            $("#46").show();
            $("#100").show();
            $("#10").show();
            $("#4").show();
            $("#6").hide();
            $("#7").hide();
            $("#1").hide();
            $("#11").hide();          
            $("#77").hide();
        }

        if (id == "enfermera") {
            $("#2").show();
            $("#3").show();
            $("#16").show();
            $("#26").show();
            $("#46").show();
            $("#100").show();
            $("#10").show();
            $("#4").show();
            $("#6").hide();
            $("#77").show();
            $("#1").hide();
            $("#11").hide();
            $("#7").hide();
          
        }
        if (id == "empresa") {
            $("#2").hide();
            $("#3").hide();
            $("#16").hide();
            $("#26").hide();
            $("#46").hide();
            $("#100").hide();
            $("#4").hide();
            $("#6").hide();
            $("#7").hide();
            $("#1").show();
            $("#10").show();
            $("#11").show();
            $("#77").hide();
        }

    }



    </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <!-- Google analytics script-->
  <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
  <script type="text/javascript">
      $('#sampleTable').DataTable();
  </script>
  </body>

@endsection




