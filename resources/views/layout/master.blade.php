<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | Летняя школа {{ date('yy') }}</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="page">
<x-header class="page__head"/>
<div class="page__main">
    @yield('content')
</div>
<x-footer class="page__footer"/>
</body>
</html>
