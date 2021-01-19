@extends('layouts.app')

@section('content')
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Medidesk</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        
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
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Admision</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Lista paciente</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Formulario paciente</a></li>
            
            
          </ul>
        </li>
        
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario para Agregar Paciente</h1>
          <p>Agregando Nuevo Paciente</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Paciente</li>
          <li class="breadcrumb-item"><a href="#">Agregar Paciente</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Paciente Nuevo</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="{{ route('guardar') }}" method="POST">
                  @csrf
                  <div class="form-group row">
                    <label for="nombre" class="control-label col-md-3">Nombre</label>
                    <div class="col-md-8">
                      <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre Completo"  required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="apellido" class="control-label col-md-3">Apellido</label>
                    <div class="col-md-8">
                      <input id="apellido" name="apellido" class="form-control" type="text" placeholder="Apellido Completo" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="edad" class="control-label col-md-3">Edad</label>
                    <div class="col-md-8">
                      <input id="edad" name="edad" class="form-control col-md-8" type="number" placeholder="Coloca tu edad" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dni" class="control-label col-md-3">DNI</label>
                    <div class="col-md-8">
                      <input id="dni" name="dni" class="form-control" type="number" placeholder="Documento de Identidad" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="f_nacimiento" class="control-label col-md-3">Fecha de nacimiento</label>
                    <div class="col-md-8">
                      <input id="f_nacimiento" name="f_nacimiento" class="form-control" type="date" placeholder="Fecha de nacimiento" required>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="genero" class="control-label col-md-3">Genero</label>
                    <div class="col-md-8">
                      <input id="genero" name="genero" class="form-control" type="text" placeholder="Colocar tu genero" required>
                    </div>
                  </div>
                                
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">Acepto los terminos y condiciones
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="tile-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="/paciente"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                    </div>
                  </div>
              </form>
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