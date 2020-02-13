@extends('layouts.app')
@section('header')
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
@endsection

