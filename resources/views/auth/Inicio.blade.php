
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
        <li><a class="app-menu__item active" href="/inicio"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    
    
    
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/registrarUsuario"><i class="icon fa fa-circle-o"></i> Crear Usuario</a></li>
           
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
          <h1><i class="fa fa-th-list"></i> Administrador</h1>
          <p>Esta es la sección principal</p>
        </div>
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Bienvenido a la sección del Administrador</div>
          </div>
        </div>
      </div>

    </main>



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




