<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />



  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css')}} -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}" >

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

</head>
<body>

    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close");

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
            <form class="form-inline my-2 my-lg-0 bg-dark">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark text-white" type="submit">Search</button>
              </form>
          <ul class="navbar-nav ml-auto text-center">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">LOGIN</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#signupModal">REGISTER</a>
            </li>
            @else 
            <li class="nav-item @@contact">
              <a class="nav-link" href="{{route('home.index')}}">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

    @if(session('success'))
    <div id="myModal" class="modal" style="display: block;">

        <!-- Modal content -->
        <div class="modal-content text-center">
          <p>{{session('success')}}</p>
          <a class="close btn btn-primary" onclick="closeModal()">Ačiū</a>
        </div>
      
    </div>
    @endif

    @yield('content')

<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/app.js')}}"></script>

@yield('scripts')

</body>
</html>


</body>
</html>