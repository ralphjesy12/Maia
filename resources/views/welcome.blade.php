<!DOCTYPE html>
<html lang="en" class="route-index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An app that gives any age the wisdom to conserve nature and reduce the most pressing threats to the diversity of life on Earth">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ProjectEve: an Earth Saving App</title>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 </head>
<body class="layout-default">
    @yield('content')

</body>
</html>
