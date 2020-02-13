<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Prise de Contact</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3C3636;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .purple{
                background-color: #4A3392;
            }

            .font-blue{
                background-color: #202dcb;
            }

            .white{
                color: #ffffff;
            }
            .blue{
                color: #202dcb;
            }
            #banner{
                height: 100px;
                width: 100%;
            }
            .title-banner{
                padding: 26px 0px;
                        }
        </style>
    </head>
    <body>
    <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
-->
            <div class="content">

                <div id="banner" class="purple">
                    <h1 class="title-banner flex-center" >Nicodenv</h1>
                </div>

                <nav class="navbar navbar-expand-lg font-blue">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link white" href="{{ url('/') }}">STREAM<span class="sr-only">(current)</span></a>
                            </li><!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">Planning</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link white" href="{{ url('/contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>

        <div class="but">
            <img src="..\..\Maquettes\Images Pour Maquettage\Nico.png" id="photo_nico">
                <div id="text">
                J'aime les anananananas
                <div>
        <div>
        
    <form>
      <div class="form-group">
        <label for="name">Entre ton nom : </label>
        <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Ton nom">
      </div>
      <div class="form-group">
        <label for="surname">Entre ton prénom : </label>
        <input type="name" class="form-control" id="surname" placeholder="Ton prénom">
      </div>
      <div class="form-group">
        <label for="mail">Entre ton email : </label>
        <input type="name" class="form-control" id="mail" placeholder="Ton email">
      </div>
      <div class="form-group">
        <label for="askin">Quelle est ta demande ?</label>
        <input type="name" class="form-control" id="askin" placeholder="Ta demande">
      </div>
      <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
        <!--</div> -->
    </body>
</html>
