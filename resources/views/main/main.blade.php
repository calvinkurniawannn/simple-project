<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'BookStore')</title>
    <link rel="stylesheet" href="{{ asset('css/main/main.css') }}">
    @include('layout.header')
    @yield('css')
</head>

<body>
    @yield('content')
    @include('layout.footer')
</body>

</html>
