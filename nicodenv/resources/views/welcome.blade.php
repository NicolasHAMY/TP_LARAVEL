<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

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
            }
            .flex-left {

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

            .font-blue-purple{
                background: linear-gradient(#4A3392,#202dcb);
            }
            a:hover{
                color: inherit;
                cursor: pointer;
            }
            a:link{
                cursor: pointer;}

            .white{
                color: #ffffff;
            }
            .blue{
                color: #202dcb;
            }
            #banner{
                height: 75px;
                width: 100%;
            }
            .title{
                padding: 15px 0px;
            }
            h1.title::before {
                content: url("./images/logo-nicodenv.jpg");
                padding: 0px 20px;
                margin-top: 10px;


            }
            .navbar{
                height: 100px;
                padding: 0px 50px;
            }
            .nav-item{
                padding: 0px 10px;

            }
            .stream-box{
                padding: 0px 0px;


            }
            .chat-box{
                padding: 0;

            }
            .live-box{
                padding: 00px 0px;
                margin: 50px 0px;

            }
            #social{
                height: 10%;
                width: 100%;
                margin-bottom: 50px;
            }
            .subtitle{
                width: 25%;
                text-align: center;
                margin: 0 auto!important;
                padding: 10px 10px;
                border-radius: 40px;;
                background: linear-gradient(#202dcb,#4A3392);
            }

            .img-social-networks{
                max-width: 50px;
                margin: 0px 30px;
                cursor: pointer;
            }

            .social-networks{
                margin: 20px 0px;
            }



            div.subtitle p{
                margin: 0;
            }

            .left{
                text-align: left;
            }

            .right{
                text-align: right;
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
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                right: 0;
            }

        </style>
    </head>
    <body>

             <header>
                 <!--
                <div id="banner" class="font-blue-purple">

                </div>
                -->

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
                            </li><!--
                                    <li class="nav-item">
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

                <div class="container">
                    <div class="row flex-center live-box">
                        <div class="stream-box">
                            <iframe src="https://player.twitch.tv/?channel=nicodenv" frameborder="0" allowfullscreen="true" scrolling="no" height="500" width="720"></iframe>
                        </div>
                        <div class="chat-box">
                            <iframe src="https://www.twitch.tv/embed/nicodenv/chat" frameborder="0" scrolling="no" height="500" width="350"></iframe>
                        </div>
                    </div>

                </div>

                <div id="social">
                    <div class="subtitle font-blue">
                    <p>Rejoignez moi sur les réseaux sociaux !</p>
                    </div>
                    <div class="social-networks">
                        <a href="https://twitter.com/Nicodenv" target="_blank"><img src="./images/twitter.png" class="img-social-networks"></a>
                        <a href="https://www.instagram.com/nicodenv/" target="_blank"><img src="./images/instagram.png" class="img-social-networks"></a>
                        <a href="https://www.youtube.com/user/nicodenv" target="_blank"><img src="./images/youtube.png" class="img-social-networks"></a>
                        <a href="https://www.twitch.tv/nicodenv" target="_blank"><img src="./images/twitch.png" class="img-social-networks"></a>
                    </div>
                </div>

                <!-- Footer -->
                <footer id="footer">
                    <div class="col-6">
                        <p class="copyright">© 2020 Nicodenv.tv • Tous droits réservés</p>
                    </div>
                    <div class="col-12">
                        <p class="mentions-legales">Mentions légales</p>
                    </div>

                </footer>



                <!-- Footer -->
            </div>
        <!--</div> -->
    </body>
</html>
