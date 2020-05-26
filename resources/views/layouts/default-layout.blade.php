<html>

<head>
        <title>ProjectZero - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/top-bar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/side-bar.css') }}">

        <script defer src="side-bar.js"></script>
</head>

<body>
        @include('addons.top-bar')
        @include('addons.side-bar')

        <div class="content">
                @yield('content')
        </div>


</body>

<footer>
        <div>
                Icons made by
                <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a>
                from
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
        </div>

        <div>
                Icons made by <a href="https://smashicons.com/" title="Smashicons">Smashicons</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        </div>
        <div>
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div>
</footer>

</html>