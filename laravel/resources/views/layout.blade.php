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

    @include('partials.nav')
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
