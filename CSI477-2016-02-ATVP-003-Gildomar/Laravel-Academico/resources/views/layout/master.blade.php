<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Acadêmico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <style>
    
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    /*.row.content {height: 450px}*/

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      height: 50px;
    }

    
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Sistema Acadêmico</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                </ul>
              </li>
            @endif
        </ul>
                
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="/disciplinas">Disciplinas</a></p>
        <p><a href="/turmas">Turmas</a></p>
        <p><a href="/estados">Estados</a></p>
        <p><a href="/cidades">Cidades</a></p>
        <p><a href="/alunos">Alunos</a></p>
      </div>
      
      <div class="col-sm-10 text-left">
        <div class="content">
          @if(Session::has('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
          @endif
          @if(Session::has('info'))
            <div class="alert alert-info">{{Session::get('info')}}</div>
          @endif
          @if(Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning')}}</div>
          @endif
          @yield('conteudo')
        </div>
      </div>    
    </div>
  </div>
  
  <footer class="container-fluid text-center navbar-fixed-bottom">
    Gildomar Gonçalves Dias- 14.2.8596 - CSI477 - Sistema WEB I - 2016/02
  </footer>

  <!-- Scripts -->
  <!-- <script src="/js/app.js"></script> -->
</body>
</html>
