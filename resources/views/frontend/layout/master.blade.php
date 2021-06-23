<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="European perfume selling website in Pakistan">
    
    <title> {{ $title ?? "" }} · {{ config("app.name") }} </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap/css/carousel.css') }}" rel="stylesheet">

    @stack('css')


</head>

<body>

    <main>

        @include('frontend.common.header')
    
        @yield('content')
    
        @include('frontend.common.footer')
    </main>


    <!-- Bootstrap core JS -->
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('js')

</body>

</html>
