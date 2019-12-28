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
        <nav class="relative">
            <div class='nav-main'>
                <p class="nonav-item-p" href='#'>Settings</p>
            </div>
            <div class='nav-main'>
                <a class="nav-item-menu" href='#'>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="30" height="29"><g><g><path fill="#1A384F" d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/></g></g>
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
