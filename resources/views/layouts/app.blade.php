<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'UNICRM')</title>
    </head>
    <body>
        <div class="container" style="background-color: #7374e4">
            @include('layouts.navbar')
        </div>
        <div class="container-md">
            @yield('content')
        </div>
    </body>
</html>