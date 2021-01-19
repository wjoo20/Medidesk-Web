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
    
        @yield('content')
        
    
            <!-- Scripts -->
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

</html>