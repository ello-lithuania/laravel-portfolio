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