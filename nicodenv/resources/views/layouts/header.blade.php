
    <nav class="navbar navbar-expand-lg font-blue-purple">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo" src="./images/logo-nicodenv.jpg">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-nicodenv white" href="{{ url('/') }}"><h1>NICODENV</h1></a>
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

                <li class="nav-item">
                    <a class="nav-link white" href="{{ url('/Pageshop') }}">BOUTIQUE</a>
                </li>

        @if (Auth::guest())
            <li class="nav-item active">
                <a class="nav-link white" href="{{ url('/login') }}">CONNEXION</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link white" href="{{ url('/register') }}">INSCRIPTION</a>
            </li>
        @else
            <li class="dropdown nav-item ">
                <a href="#" class="dropdown-toggle nav-link white uppercase" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link white" href="{{ url('/logout') }}">DECONNEXION</a>
             </li>
        @endif
            </ul>
        </div>
    </nav>


