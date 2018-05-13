<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Smart Hotels</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Cormorant+Garamond|Crimson+Text|Merriweather|Montserrat" rel="stylesheet">
    <!--
    font-family: 'Merriweather', serif;
    font-family: 'Montserrat', sans-serif;
    font-family: 'Crimson Text', serif;
    font-family: 'Alegreya', serif;
    font-family: 'Cormorant Garamond', serif;

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
     <style>


                body{
                    background: url(https://images.unsplash.com/photo-1506804886640-20a2c0857946?ixlib=rb-0.3.5&s=d1f37bff2f521b306b2d1d73222ecc31&auto=format&fit=crop&w=667&q=80), #000;
                    background-size: cover;
                    background-attachment: fixed;
                    position: relative;
                    color: #636b6f;
                    height: 100vh;
                    margin: 0;

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
                .panel, panel-default{
                    background: rgba(0,0,0,.7);
                    margin-top: 100px;
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
                .form-group{
                    text-align: left;
                    margin: 0;

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
    @yield('css')
</head>

<body>


        @include('layouts.menu')

            @yield('content')

        @include('layouts.footer')





<!-- jQuery 3.1.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>

@yield('scripts')
</body>
</html>