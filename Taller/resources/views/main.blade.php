<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Hotels</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Cormorant+Garamond|Crimson+Text|Merriweather|Montserrat" rel="stylesheet">
        <!--
        font-family: 'Merriweather', serif;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Crimson Text', serif;
        font-family: 'Alegreya', serif;
        font-family: 'Cormorant Garamond', serif;

 <!-- Styles -->
        <style>
            #content {
                text-align: center;
                padding-top: 25%;
                color: white;

            }
            body{
                background: url(https://images.unsplash.com/photo-1506804886640-20a2c0857946?ixlib=rb-0.3.5&s=d1f37bff2f521b306b2d1d73222ecc31&auto=format&fit=crop&w=667&q=80), #000;
                background-size: cover;
                background-attachment: fixed;
                position: relative;
                color: #636b6f;
                height: 100vh;
                margin: 0;

            }
            img {
                opacity: 0.4;
                filter: alpha(opacity=40); /* For IE8 and earlier */
            }
            body, html{
            	width: 100%;
            	height: 100%
            }
            .navbar-inverse {
            	background:rgba(0,0,0,.7);
            	overflow: hidden;
            }
            .jumbotron{
            	background: rgba(0,0,0,.7);
            	margin-top: 70px;
            	color: #fff;
            	position: relative;

            }


            .carousel, .carousel-inner > .item > img {
              	height: 400px;
              	width: 820px;
             	margin: 20px auto;
            	display: flex;
            	align-items: center;
            	justify-content: center;
            }

            .contenedor{
            	height: 80%;
            	margin: 5px auto;
            	display: flex;
            	align-items: center;
            	justify-content: center;
            	position: relative;
            }
            .buscar{
                margin: 5px auto;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            html {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                color: #0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    	  <div class="container">

    	    <!-- Collect the nav links, forms, and other content for toggling -->
    	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	    @if (Route::has('login'))
    	      <ul class="nav navbar-nav">

                  @if (Auth::check())

                       <li><a href="{{ url('/') }}"><i class="fas fa-user"></i> {{ Auth::user()->name}} </a></li>
                       <li><a href="{{ url('/home') }}"><i class="fas fa-laptop"></i>	Home </a></li>
                       <li><a href="{{ url('/hotels') }}"><i class="fab fa-fort-awesome-alt"></i> Hotels</a></li>
                       <li><a href="{{ url('/userHotes') }}"><i class="fas fa-users"></i> Users</a></li>

                       <ul class="nav navbar-nav navbar-right">
                           <li>
                               <a href="{!! url('/logout') !!}"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Cerrar sesión
                               </a><i class="fas fa-door-open"></i>
                               <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                   style="display: none;">
                                 {{ csrf_field() }}
                                </form>
                           </li>
                       </ul>


                  @else
                      <li><a href="{{ url('/login') }}"><i class="fas fa-universal-access"></i>	Login </a></li>
                      <li><a href="{{ url('/register') }}"><i class="fas fa-address-card"></i>	Register </a></li>

                  @endif

    	      </ul>
    	     @endif

    	    </div><!-- /.navbar-collapse -->
    	  </div><!-- /.container-fluid -->
    </nav>
<br/><br/><br/>


    </body>

    <br/> <br/><br/><br/> <br/> <br/> <br/><br/>
    <br/> <br/><br/><br/> <br/> <br/> <br/><br/>
    <br/> <br/><br/><br/> <br/>



    <!--Footer-->
    <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="container">
        <div class="panel panel-default">
        <!--Footer Links-->
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <h5 class="text-uppercase"></h5>
                        <p>Este proyecto fue desarrollado en php, con la ayuda del generador InfyOm para laravel,
                        aquí registraras hoteles y buscaras por nombre y por ciudad, ademas los podras visualizar,
                        califica y comentar.</p>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-md-6">
                        <h5 class="text-uppercase">Si deseas ver más</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#https://github.com/LookIron/">Visita mi reposotorio de git</a>
                            </li>
                         </ul>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright py-3 text-center">
                 <strong>Copyright © 2018 Created by Esteban Camacho. </strong> All rights reserved.
            </div>
            <!--/.Copyright-->
     </div>
      </div>
        </footer>
        <!--/.Footer-->


</html>
