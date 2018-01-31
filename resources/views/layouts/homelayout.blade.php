<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Gestion Chambre</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('./css2/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('./css2/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('./css2/demo.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <style media="screen">
    .navbar .navbar-nav {
      display: inline-block;
      float: none;
      vertical-align: top;
    }

    .navbar .navbar-collapse {
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="wrapper">

      <div class="sidebar" data-color="purple" data-image="./img/sidebar-7.jpg">
      <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

      <div class="logo">
        <a href="/home" class="simple-text">
          {{ config('app.name', 'Codification') }}
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li class="home link">
                      <a href="{{route('admin.dashboard')}}">
                          <i class="fa fa-home"></i>
                          <p>Accueil</p>
                      </a>
                  </li>
                  
                  <li class="batiments link">
                      <a href="{{url('admin/batiment')}}">
                          <i class="fa fa-users"></i>
                          <p>Gérer les batiments</p>
                      </a>
                  </li>

                  <li class="positions link">
                      <a href="{{url('admin/etage')}}">
                          <i class="fa fa-users"></i>
                          <p>Gérer les etages</p>
                      </a>
                  </li>


                  <li class="positions link">
                      <a href="{{url('admin/couloir')}}">
                          <i class="fa fa-users"></i>
                          <p>Gérer les couloirs</p>
                      </a>
                  </li>



                  <li class="clients link">
                      <a href="{{ url('admin/chambre')}}">
                          <i class="fa fa-users"></i>
                          <p>Gérer les chambres</p>
                      </a>
                  </li>

                  <li class="positions link">
                      <a href="{{url('admin/position')}}">
                          <i class="fa fa-users"></i>
                          <p>Gérer les positions</p>
                      </a>
                  </li>

                  
                  <li class="facture link">
                      <a href="{{url('admin/opencodif')}}">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                          <p>Gestion codification</p>
                      </a>
                  </li>
                  <li class="params link">
                      <a href="#">
                          <i class="fa fa-cogs"></i>
                          <p>Paramétres</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

      <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            @yield('headtitle')
            {{-- <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Accueil</a> --}}
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              @if (!Auth::guest())
              <li class="dropdown">
                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                   {{ Auth::user()->name }} <i class="fa fa-user-o"></i>
                   <p class="hidden-lg hidden-md">Profile</p>
                </a>
                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Se déconnecter
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
              </li>
             @endif
            </ul>

            <form class="navbar-form" role="search">
              <div class="form-group  is-empty">
                <input type="text" class="form-control" placeholder="Rechercher un client">
                <span class="material-input"></span>
              </div>
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
              </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="container-fluid">

          @yield('contenu')

        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="http://www.esp.sn/">
                  ESP / UCAD
                </a>
              </li>
              <li>
                <a href="#">
                  A propos de nous !
                </a>
              </li>
                  </ul>
          </nav>
          <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#">PROJET SGBD </a>, TEAM ONE
              </p>
        </div>
      </footer>
    </div>
  </div>

</body>

  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="{{asset('js/chartist.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  {{-- <script src="{{asset('js/bootstrap-notify.js')}}"></script> --}}

  <!-- Material Dashboard javascript methods -->
  <script src="{{asset('js/material-dashboard.js')}}"></script>

  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  {{-- <script src="{{asset('./js/demo.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('./js/vue.js')}}"> --}}

  {{-- </script> --}}



</html>
