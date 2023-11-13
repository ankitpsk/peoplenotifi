<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"   crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"   crossorigin="anonymous"></script>
        <style>
            .pt-0{padding-top: 0px;}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:text-white">
                @yield('body')
        </div>
    </body>
</html>
