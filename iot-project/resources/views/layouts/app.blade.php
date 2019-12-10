<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ping-a-Cup</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!--     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/app.css"> -->

</head>
<body>
    <div id="app">
        <!-- Navigation Top Bar  -->
        <nav>
          <ul class='nav-main'>
            <li class="nav-item nav-item-day"><a class="nav-item-link" href='#'>Date</a></li>
            <li class="nav-item nav-item-menu"><a class="nav-item-menu" href='#'>Menu</a></li>
          </ul>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>

        </footer>

    </div>
</body>
</html>
