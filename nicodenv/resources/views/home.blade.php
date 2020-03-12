
@extends('layouts.app')
@section("content")
            <!----- MAIN ----->
            <div class="content">
                <!----- CONTENT-STREAM ----->
                <div class="container">
                    <div class="row flex-center live-box">
                        <div class="stream-box">
                            <iframe src="https://player.twitch.tv/?channel=nicodenv" frameborder="0" allowfullscreen="true" scrolling="no" height="600" width="900"></iframe>
                        </div>

                        <div class="chat-box">
                            <iframe src="https://www.twitch.tv/embed/nicodenv/chat" frameborder="0" scrolling="no" height="600" width="300"></iframe>
                        </div>
                    </div>
                </div>
                <!----- CONTENT-SOCIAL ----->
                <div id="social">
                    <div class="subtitle">
                        <p>Rejoignez moi sur les réseaux sociaux !</p>
                    </div>
                    <div class="social-networks">
                        <a href="https://twitter.com/Nicodenv" target="_blank"><img src="./images/twitter.png" class="img-social-networks"></a>
                        <a href="https://www.instagram.com/nicodenv/" target="_blank"><img src="./images/instagram.png" class="img-social-networks"></a>
                        <a href="https://www.youtube.com/user/nicodenv" target="_blank"><img src="./images/youtube.png" class="img-social-networks"></a>
                        <a href="https://www.twitch.tv/nicodenv" target="_blank"><img src="./images/twitch.png" class="img-social-networks"></a>
                    </div>
                </div>
            </div>
@endsection
