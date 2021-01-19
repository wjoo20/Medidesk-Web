<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="#">MediDesk</a>
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