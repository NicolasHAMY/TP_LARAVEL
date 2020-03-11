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
        @include("layouts.css.global");
    </style>

</head>
<body>

<!----- HEADER/NAVBAR ----->
<header>
  @include("layouts.header")
</header>

@yield("content")

 <!--
<div class="modal fade" tab-index="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
                <h4 class="modal-title" id="loginModalLabel">Sign in to start your session</h4>
               </div>
               <div class="modal-body">

               </div>
                <div class="modal-footer">
                    <p>This is our modal footer</p>
                 </div>
                 </div>
                 </div>
                 </div>
 -->

<!----- FOOTER ----->
<footer id="footer">
    @include("layouts.footer")
</footer>

</body>

</html>
