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
                <a href="{{ url('/') }}">Home</a>
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

        <div class="table-responsive">
            <table style="width:100%" class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Material</th>
                        <th>Quantidade</th>
                        <th>Local</th>
                        <th>Data</th>
                    </tr>
                </thead>
                @foreach($pontos as $ponto)
                    <tbody class="text-left">
                        <tr>
                            <td>{{$ponto->tipo}}</td>
                            <td>{{$ponto->material}}</td>
                            @if($ponto->quantidade)
                                <td>{{$ponto->quantidade}}</td>
                            @else
                                <td>{{$ponto->peso}}</td>
                            @endif
                            <td>{{$ponto->nome_local}}</td>
                            <td>{{$ponto->created_at}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
