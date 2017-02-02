<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    The Big Hackaton #CPBR10
                </div>

                @if (Auth::check())
                    <div class="links">
                        <a href="https://laravel.com/docs">Histórico</a>
                        <a href="https://laracasts.com">Locais de Coleta</a>
                        <a href="https://laravel-news.com">Dicas de Descarte</a>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
