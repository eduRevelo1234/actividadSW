<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .welcome-message {
            background-color: #000;
            color: #00bb2d;
            padding: 20px;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body class="">
    <div class="">
        @include('layouts.navigation')
        <main>
            <div class="welcome-message">
                <p>Bienvenido/a a nuestro sitio web.</p>
                <p>Esperamos que disfrutes de tu estancia.</p>
            </div>
        </main>
    </div>
</body>

</html>
