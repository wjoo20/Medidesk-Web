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
        <li><a class="app-menu__item" href="/inicio"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
      <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/registrarUsuario"><i class="icon fa fa-circle-o"></i> Crear Usuario</a></li>
           
            <li><a class="treeview-item active" href="/medicos"><i class="icon fa fa-circle-o"></i> Médicos</a></li>
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
          <h1><i class="fa fa-th-list"></i> Médicos</h1>
          <p>En esta sección se visualizarán los médicos registrados.</p>
        </div>
  
      </div>
      @isset($med)

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Actualizar Usuario</div>
    
                    <div class="card-body">
    
    
    
                        <form method="POST" action="/medicos/actualizar">
                            @csrf
               
                          
                           
                           @if($user[0]['tipo']=="empresa")
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de la Empresa:</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"value="{{ $med[0]['nombre'] }}"  >
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                   @endif
    
    
                   
    
                        @if($user[0]['tipo']!="empresa")
                            <div class="form-group row">
                                <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres:</label>
    
                                <div class="col-md-6">
                                    <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ $med[0]['nombres']}}">
    
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       @endif
    
                        @if($user[0]['tipo']!="empresa")
                            <div class="form-group row">
                                <label for="apellidos" class="col-md-4 col-form-label text-md-right">Apellidos:</label>
    
                                <div class="col-md-6">
                                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{$med[0]['apellidos'] }}"  >
    
                                    @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          @endif
                         
                            @if($user[0]['tipo']!="empresa")
                                <div class="form-group row">
                                    <label for="fec_nac" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento:</label>
        
                                    <div class="col-md-6">
                                        <input id="fec_nac" type="date" class="form-control @error('fec_nac') is-invalid @enderror" name="fec_nac" value="{{ $med[0]['fecha_nacimiento']}}"  >
        
                                        @error('fec_nac')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                             @endif
    
    
                                @if($user[0]['tipo']!="empresa")
                                    <div class="form-group row">
                                        <label for="edad" class="col-md-4 col-form-label text-md-right">Edad:</label>
            
                                        <div class="col-md-6">
                                            <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ $med[0]['edad']}}"  >
            
                                            @error('edad')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    @endif
    
                                    @if($user[0]['tipo']!="empresa")
                                        <div class="form-group row">
                                          <legend class="col-md-4 col-form-label text-md-right">Género:</legend>
                                          <div class="col-md-6">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Femenino" @if($med[0]['genero']=="Femenino") checked @endif>
                                              <label class="form-check-label" for="gridRadios1">
                                                Femenino
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Masculino" @if($med[0]['genero']=="Masculino") checked @endif>
                                              <label class="form-check-label" for="gridRadios2">
                                              Masculino
                                              </label>
                                            </div>
                                           
                                          </div>
                                        </div>
                                    @endif
                                 
                                    @if($user[0]['tipo']!="empresa")
                                            <div class="form-group row">
                                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono:</label>
                    
                                                <div class="col-md-6">
                                                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $med[0]['telefono'] }}">
                    
                                                    @error('telefono')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                           
                                        @endif
    

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección:</label>
    
                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $med[0]['direccion'] }}">
    
                                    @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                 
    
    
                        @if($user[0]['tipo']=="empresa")
                            <div class="form-group row">
                                <label for="ruc" class="col-md-4 col-form-label text-md-right">RUC:</label>
    
                                <div class="col-md-6">
                                    <input id="ruc" type="text" class="form-control @error('ruc') is-invalid @enderror" name="ruc" value="{{ $user[0]['id'] }}" disabled>
    
                                    @error('ruc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       @endif
    
    
        
                       @if($user[0]['tipo']!="empresa")
                            <div class="form-group row">
                                <label for="Dni" class="col-md-4 col-form-label text-md-right">Dni:</label>
    
                                <div class="col-md-6">
                                    <input id="Dni" type="text" class="form-control @error('Dni') is-invalid @enderror" name="Dni" value="{{  $med[0]['dni']}}" disabled >
    
                                    @error('Dni')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       @endif
                       
                           
                            <div class="form-group row">
                                
                                    <label for="Tipo" class="col-md-4 col-form-label text-md-right">Tipo de Usuario:</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="Tipo" name="Tipo" onChange="mostrar(this.value);">
                                   
                                        
                                        @if($user[0]['tipo']=="medico")
                                    <option value="medico" selected>Médico</option>
                                      @else
                                      @if($user[0]['tipo']=="admision")
                                    <option value="admision" selected>Administrador</option>
                                    @else
                                    @if($user[0]['tipo']=="enfermera")
                                      <option value="enfermera" selected>Enfermera</option>
                                      @else
                                      <option value="empresa" selected>Empresa</option>
                                    @endif
                                    @endif
                             @endif
                                    </select>
                              
    
                                    @error('Tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            @if($user[0]['tipo']=="medico")
                                <div class="form-group row">
                                
                                    <label for="Especialidad" class="col-md-4 col-form-label text-md-right">Especialidad:</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="Especialidad" name="Especialidad" onChange="mostrar(this.value);">
                                      <option></option>
                                        <option value="audiometria" @if ($med[0]['especialidad']== "audiometria") {{ 'selected' }} @endif>Audiometría</option>
                                      <option value="laboratorio" @if ($med[0]['especialidad'] == "laboratorio") {{ 'selected' }} @endif>Laboratorio</option>
                                      <option value="oftalmologia" @if ($med[0]['especialidad'] == "oftalmologia") {{ 'selected' }} @endif>Oftalmología</option>
                                      <option value="psicologia" @if ($med[0]['especialidad'] == "psicologia") {{ 'selected' }} @endif>Psicología</option>
                                      <option value="radiologia" @if ($med[0]['especialidad'] == "radiologia") {{ 'selected' }} @endif>Radiología</option>
                                      <option value="espirometria" @if ($med[0]['especialidad'] == "espirometria") {{ 'selected' }} @endif>Espirometría</option>
                                      <option value="odontologia" @if ($med[0]['especialidad'] == "odontologia") {{ 'selected' }} @endif>Odontología</option>
                             
                                    </select>
                              
    
    
                                    @error('Especialidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          @endif
                           
    
                          @if($user[0]['tipo']=="medico")
                            <div class="form-group row">
                                <label for="ColegioMedico" class="col-md-4 col-form-label text-md-right">CMP:</label>
    
                                <div class="col-md-6">
                                    <input id="ColegioMedico" type="text" class="form-control @error('ColegioMedico') is-invalid @enderror" name="ColegioMedico" value="{{ $med[0]['cmp'] }}" autocomplete="ColegioMedico">
    
                                    @error('ColegioMedico')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                       
                            @if($user[0]['tipo']=="enfermera")
                            <div class="form-group row">
                                <label for="ColegioEnfermero" class="col-md-4 col-form-label text-md-right">CEP:</label>
    
                                <div class="col-md-6">
                                    <input id="ColegioEnfermero" type="text" class="form-control @error('ColegioEnfermero') is-invalid @enderror" name="ColegioEnfermero" value="{{ $med[0]['cep'] }}" autocomplete="ColegioEnfermero">
    
                                    @error('ColegioEnfermero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                      
                     
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user[0]['email'] }}" required autocomplete="email" disabled>
    
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
    
                           
                      <input type="hidden" name="email1" value="{{$user[0]['email']}}"> 
                      <input type="hidden" name="dni1" value="{{$user[0]['id']}}"> 
                     
                       
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>
                                        Registrar
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


      @endisset



      @isset($medi)

      <div class="row">
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
                  
                      <th>Edad</th>
                      <th>Género</th>
                      <th>Telefono</th>
               
                      <th>Especialidad</th>
          
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody> 

                    @foreach ($medi as $a)
                       <tr>
                      <td>{{$a->dni}}</td>
                      <td>{{$a->nombres}}</td>
                      <td>{{$a->apellidos}}</td>
                      <td>{{$a->edad}}</td>
                      <td>{{$a->genero}}</td>
                      <td>{{$a->telefono}}</td>
                      <td>{{$a->especialidad}}</td>
                  
                      <td><a class="btn btn-success" href="/medicos/actualizar?id={{$a->dni}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</a>
                      <a class="btn btn-danger" href="/medicos/eliminar?id={{$a->dni}}" onclick="return confirm('Está seguro que desea eliminar?. Recuerde que se eliminarán todos los datos del usuario.')"><i class="fa fa-fw fa-lg fa-times-circle"></i>Eliminar</a></td>

                    </tr>   
                    @endforeach
                  
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endisset
      
    </main>
     <!-- Essential javascripts for application to work-->
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


