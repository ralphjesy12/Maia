<!DOCTYPE html>
<html lang="en" class="route-index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bulma is an open source CSS framework based on Flexbox and built with Sass. It's 100% responsive, fully modular, and available for free.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Maia: a Learning Management App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
</head>
<body class="layout-default">
    <div  id="app" >

        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
