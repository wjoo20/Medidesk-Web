@extends('layouts.app')

@section('content')

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Hospital</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
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
        <li><a class="app-menu__item" href="/reservas"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Reserva</span></a></li>
        <li><a class="app-menu__item" href="Paciente.html"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Lista de Reservas</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario para Agregar Reservas</h1>
          <p>Añadiendo Reserva</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Reserva</li>
          <li class="breadcrumb-item"><a href="#">Agregar Reserva</a></li>
        </ul>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6 col-6 my-auto mx-auto">
          <div class="tile">
            <h3 class="tile-title">Agregar Reserva</h3>
            <div class="tile-body">
              <form action="{{ route('reservas.store')}}" method="post">
              @csrf  
              
              <div class="form-group row">
                  <label for="nombres"  class="control-label col-md-3">Nombre:</label>
                  <div class="col-md-8">
                    <input name="nombres" id="nombres" type="text" class="form-control"  value="{{ old('nombres',$reserva -> nombres)}}"  placeholder="Nombre Completo" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="apellidos" class="control-label col-md-3">Apellido:</label>
                  <div  class="col-md-8">
                    <input name="apellidos" id="apellidos" class="form-control" type="text" value="{{ old('apellidos',$reserva -> apellidos)}}" placeholder="Apellido Completo">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="id" class="control-label col-md-3">DNI:</label>
                  <div class="col-md-8">
                    <input name="_id" id="id" class="form-control" type="text" value="{{ old('id',$reserva -> id)}}" placeholder="Documento de Identidad">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telefono" class="control-label col-md-3">Telefono:</label>
                  <div class="col-md-8">
                    <input name="telefono" id="telefono" class="form-control" type="text" value="{{ old('telefono',$reserva -> telefono)}}" placeholder="Documento de Identidad">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="id_empresa" class="control-label col-md-3">Empresa:</label>
                  <div class="col-md-8">
                    <input name="id_empresa" id="id_empresa" class="form-control" type="text" value="{{ old('id_empresa',$reserva -> id_empresa)}}" placeholder="Documento de Identidad">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fecha_nacimiento" class="control-label col-md-3">Fecha Nacimiento</label>
                  <div class="col-md-8">
                    <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" type="date" value="{{ old('fecha_nacimiento',$reserva -> fecha_nacimiento)}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="estado" class="control-label col-md-3">Estado:</label>
                  <div class="col-md-8">
                    <input name="estado" id="estado" class="form-control" type="text" value="{{ old('estado',$reserva -> estado)}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fecha_reserva" class="control-label col-md-3">Fecha Reserva:</label>
                  <div class="col-md-8">
                    <input name="fecha_reserva" id="fecha_reserva" class="form-control" type="date" value="{{ old('fecha_reserva',$reserva -> fecha_reserva)}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="especialidad" class="control-label col-md-3">Especialidad::</label>
                  <div class="col-md-8">
                    <input name="especialidad" id="especialidad" class="form-control" type="text" value="{{ old('especialidad',$reserva -> especialidad)}}">
                  </div>
                </div>    
                <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary" type="submit" value="Enviar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Agregar</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    
   
            </div>
          </div>
        </div>
      </div>
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
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>

@endsection
