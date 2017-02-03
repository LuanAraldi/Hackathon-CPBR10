<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    <div id="app">
        @include('partials.top_bar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
