<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrusel</title>

	<link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/menus.css')}}">

	<link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
	<link rel="stylesheet" href="{{asset('css/mi-slider.css')}}">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</head>
<body>

	<header>
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
           <!-- <p class="logo"><img src="{{asset('img/project/logo.png')}}" width="37%" ></p> -->
            <nav id="dos">
               <input type="text">  <!--aki es el buscador carlosssss aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaassfospigh  puto--------------->
            </nav>
        </div>

        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <br><br><br><br><br><br>
                    <a href="">Q.Roo</a><br>
                    <a href="#">Yucat&aacute;n</a><br>
                    <a href="#">Test</a><br>
                    @auth
                      <a href="{{route('admin')}}">Admin</a>
                      <form action="/logout" method="POST">
                        @csrf
                          <button style="background-color: transparent;border: none;width:150px;font-size: 16px">Log out</button>
                      </form>
                      @else
                      <a href="{{route('login')}}">Login</a>
                    @endauth
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
</header>

      @yield('content')

      
</body>
</html>