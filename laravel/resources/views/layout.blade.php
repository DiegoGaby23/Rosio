<!DOCTYPE html>
<html lang="fr">

<head>
    <title> @yield('title') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <nav>
        <ul>
            <li class=" {{request()->routeIs('home') ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></li>
            <li class=" {{request()->routeIs('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
            <li class=" {{request()->routeIs('portfolio') ? 'active' : ''}}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
            <li class=" {{request()->routeIs('about') ? 'active' : ''}}"><a href="{{ route('about') }}">About</a></li>

        </ul>
    </nav>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
