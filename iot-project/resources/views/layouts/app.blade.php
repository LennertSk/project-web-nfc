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
            <div class='nav-main'>
                <p id="lala" class="nav-item-p" href='#'>20 Nov 2019</p>
                <p class="nav-item-amount" href='#'>1440 / 2500 ml</p>
            </div>
            <div class='nav-main'>
                <a class="nav-item-menu" href='#'>
                    <svg width="30" height="29" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="7.19998" y1="3.10004" x2="18" y2="3.10004" stroke="white"/>
                        <line y1="8.5" x2="10.8" y2="8.5" stroke="white"/>
                        <line x1="4.09998" y1="2.18557e-08" x2="4.09998" y2="5.4" stroke="white"/>
                        <line x1="13.1" y1="5.39996" x2="13.1" y2="10.8" stroke="white"/>
                        <line y1="3.10001" x2="3.6" y2="3.10001" stroke="white"/>
                        <line x1="14.4" y1="8.5" x2="18" y2="8.5" stroke="white"/>
                        <line y1="13.9" x2="9" y2="13.9" stroke="white"/>
                        <line x1="7.69998" y1="10.8" x2="7.69998" y2="16.2" stroke="white"/>
                        <line x1="10.8" y1="13.9" x2="18" y2="13.9" stroke="white"/>
                    </svg>
                </a>
            </div>
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
