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

        .live-box{
            padding: 00px 0px;
            margin: 50px 0px;
        }

        .stream-box{
            padding: 0px 0px;
        }

        .chat-box{
            padding: 0;
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

        .social-networks{
            margin: 20px 0px;
        }

        .img-social-networks{
            max-width: 50px;
            margin: 0px 30px;
            cursor: pointer;
        }

        div.subtitle p{
            margin: 0;
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
  @include("layouts.header")
</header>

@yield("content")

<!----- FOOTER ----->
<footer id="footer">
    @include("layouts.footer")
</footer>

</body>

</html>
