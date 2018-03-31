<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="https://www.udemy.com/staticx/udemy/images/v6/favicon-128.png" sizes="128x128" />

    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('head')
</head>

<body>

    @stack('begin')

    <header>
        @include('layouts._header')
    </header>

    <main role="main">
        @yield('content')
        @include('layouts._footer')
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>

    @stack('end')

</body>

</html>