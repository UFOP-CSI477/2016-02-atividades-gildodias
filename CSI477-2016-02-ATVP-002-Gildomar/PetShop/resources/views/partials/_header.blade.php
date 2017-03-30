<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <span class="logo-mini"><b>********************************************</b></span>
      <span class="logo-lg">P E T S H O P</span>
      <span class="logo-mini"><b>********************************************</b></span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Reduzir Menu</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          @if(Auth::check())
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>

              <ul class="dropdown-menu">
                <li class="user-body">
                  <p>
                    {{ Auth::user()->name }}
                    <small>Membro desde {{ Auth::user()->created_at }}</small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-right">
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>

          @else
            <li class=""><a href="{{ route('login')}}">Login</a></li>
            <li class=""><a href="{{ route('register')}}">Registra-se</a></li>
            <li class=""><a href="<?php echo e(route('login')); ?>">Operador</a></li>
            <li class=""><a href="<?php echo e(route('login')); ?>">Administrador</a></li>
          @endif

        </ul>
      </div>
    </nav>
</header>