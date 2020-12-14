<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet">
        <link href="{{ asset('css/line.css') }}"  rel="stylesheet">
        <link href="{{ asset('css/app.css') }}"  rel="stylesheet">

        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="antialiased">
    @yield('content')

    @stack('scripts')
    </body>
</html>
