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
                font-family:'work', sans-serif ;
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
                margin: 0 auto;
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

            a:hover{
                color: inherit;
                cursor: pointer;
            }
            a:link{
                cursor: pointer;
                color: unset;
            }
            a:active{
                color: unset;
            }
            a:visited{
                color: unset;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .font-blue-purple{
                background: linear-gradient(#4A3392,#202dcb);
            }

            .white{
                color: #ffffff;
            }

            .navbar{
                height: 100px;
                padding: 0px 50px;
            }

            .nav-item{
                padding: 0px 10px;

            }

            .form-group{
                width: 100%;
                position: relative;
            }

            .askin{
                width: 100%;
                position: relative;
                text-align: center;
                margin-left: 100px;
            }

            .block-form{
                text-align: center;
                margin-right: 100px;
                width: 100%;

            }

            .but{
                position : relative;
                margin-top: 50px;
                width: 100%;
            }

            #text{
                width: 45%;
                text-align: center;
                margin: 0 auto;
                margin-top: 20px;
            }
            .copyright{
                text-align: left;
                float: left;
                padding-left: 50px!important;
                padding-top: 15px;
                width: 100%;
                margin: 0 auto;
                padding-left: 0px;
            }
            .mentions-legales{
                text-align: right;
                padding-top: 15px;
                padding-right: 50px;
                width: 100%;
                margin: 0 auto;
                padding-left: 0px;
            }

            #footer{
                background: linear-gradient(#202dcb,#4A3392);
                height: 50px;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                right: 0;
            }

            #soumettre{
                margin-top: 50px;
            }
            
        </style>
    </head>
    <body>

    <!----- HEADER/NAVBAR ----->
    <header>
        <nav class="navbar navbar-expand-lg font-blue-purple">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="./images/logo-nicodenv.jpg">
                        </a>
                    </li>
                    <li class="nav-item" style="margin-top: 15px">
                        <a class="nav-link white" href="{{ url('/') }}"><h1>NICODENV</h1></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link white" href="{{ url('/') }}">STREAM</a>
                    </li>
                    <!--<li class="nav-item">
                            <a class="nav-link" href="#">Planning</a>
                        </li>-->
                    <li class="nav-item">
                        <a class="nav-link white" href="{{ url('/contact') }}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <div class="content">
        <div class="but">
            <img src="..\..\Maquettes\Images Pour Maquettage\Nico.png" id="photo_nico">
                <div id="text">
                    Nicolas 21 ans, fan de jeux vidéos majoritairement compétitifs sous le pseudo de Nicodenv ! <br>
                    Vous me retrouverez principalement sur League Of Legends mais également de temps en temps sur d'autres jeux comme Legends Of Runeterra, TFT, Overwatch et CS-GO :) <br> <br>
                    Si vous avez des questions, des demandes de coaching, des demandes commerciales ou autre à me faire parvenir, veuillez m'envoyer un petit message à travers ce formulaire.
                </div>
        </div>
        <!-- <div class="tenor-gif-embed" data-postid="4702859" data-share-method="host" data-width="100%" data-aspect-ratio="1.7291666666666667"><a href="https://tenor.com/view/sos-save-me-help-me-sponge-bob-gif-4702859">SOS SOS SOS - SpongeBob Squarepants GIF</a> from <a href="https://tenor.com/search/sos-gifs">Sos GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script> -->
    <br><br>
    <form>

        <div class="row flex-center">

            <div class="block-form col-4">

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
            </div>

            <div class="askin col-4">
                <label for="askin">Quelle est ta demande ?</label>
                <textarea class="form-control" id="askin" rows="9" placeholder="Ta demande"></textarea>
            </div>
        </div>

      <button type="submit" class="btn font-blue-purple white" id="soumettre">Soumettre</button>
    </form>

            <!----- FOOTER ----->
            <footer id="footer">

                <div class="col-6">
                    <p class="copyright">© 2020 Nicodenv.tv • Tous droits réservés</p>
                </div>

                <div class="col-12">
                    <p class="mentions-legales">Mentions légales</p>
                </div>

            </footer>
    </body>
</html>
