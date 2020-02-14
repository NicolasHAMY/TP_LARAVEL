
@extends('layouts.app')
@section("content")
    <!----- MAIN ----->
    <div class="content">
        <!----- CONTENT-TEXT FORM ----->
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
        <!----- CONTENT-FORM ----->
        <form method="POST" action="{!! url('contactForm') !!}" accept-charset="UTF-8">
            @csrf
            <div class="row flex-center">

                <div class="block-form col-4">

                    <div class="form-group">
                        <label for="surname">Entre ton prénom : </label>
                        <input name="surname" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Ton prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Entre ton nom : </label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Ton nom" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Entre ton email : </label>
                        <input name="email" type="email" class="form-control" id="mail" placeholder="Ton email" required>
                        @if($errors->has('email'))
                            <p class="error-form">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                </div>

                <div class="askin col-4">
                    <label for="askin">Quelle est ta demande ?</label>
                    <textarea name="question" class="form-control" id="askin" rows="9" placeholder="Ta demande" required></textarea>
                </div>
            </div>

          <button type="submit" class="btn font-blue-purple white" id="soumettre">Soumettre</button>
        </form>
        @if (Session::has('message'))
        <div class="validation-form">{{Session::get('message')}}</div>
         @endif
    </div>
@endsection
