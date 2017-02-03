@section('check_login')
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="">Teste</a>
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Registrar</a>
            @endif
        </div>
    @endif
@endsection

<nav class="navbar navbar-default navbar-static-top bg-white">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand color-green col-md-3" href="{{ url('/') }}" style="color: #5cb85c; padding-top: 2em;">
                <img class="img-responsive" src="/images/logo.png" alt="logo moeda verde">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" style="color:#00f600;">Login</a></li>
                    <li><a href="{{ url('/register') }}" style="color:#00f600">Registrar</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>