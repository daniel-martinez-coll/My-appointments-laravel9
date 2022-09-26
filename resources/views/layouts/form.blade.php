<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ Vite::asset('resources/img/favicon.png') }}" >
  <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/favicon.png') }}" >
  <title>
    {{config('app.name')}} | @yield('title', 'Bienvenidos') 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href=" {{ Vite::asset('resources/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href=" {{ Vite::asset('resources/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>
  <link href="{{ Vite::asset('resources/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ Vite::asset('resources/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                {{config('app.name')}}
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">                
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link me-2"><i class="fas fa-user-circle opacity-6 text-dark me-1"></i></i>Registrarse</a>
                    @endif
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{ route('login') }}">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Ingresar
                  </a> 
                </li>
              </ul>              
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div> 
  @yield('content')
  @include('includes/panel/footer')
  <!--   Core JS Files   -->
  <script src="{{ Vite::asset('resources/js/core/popper.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ Vite::asset('resources/js/plugins/perfect-scrollbar.min.js')}}" ></script>
  <script src="{{ Vite::asset('resources/js/plugins/smooth-scrollbar.min.js')}}" ></script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ Vite::asset('resources/js/argon-dashboard.min.js?v=2.0.4')}}" ></script>

</body>

</html>