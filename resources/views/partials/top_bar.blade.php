@section('top_bar')
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