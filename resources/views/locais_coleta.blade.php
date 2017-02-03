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

        <div id="map" style="width: 500px; height: 500px;"></div>
        <script>
            function initMap() {
                var myLatLng = {lat: -25.363, lng: 131.044};

                // Create a map object and specify the DOM element for display.
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: false,
                    zoom: 4
                });

                // Create a marker and set its position.
                var marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: 'Hello World!'
                });
            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIXjMUu6CP7IQKnRW1RPe-lBPEK5t1DFk&callback=initMap"
                async defer></script>
</div>
</body>
</html>
