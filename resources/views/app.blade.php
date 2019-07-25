<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">

    <title>Alyce - Test task</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('images/icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    @yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
