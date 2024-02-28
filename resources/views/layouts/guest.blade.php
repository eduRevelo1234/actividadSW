<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

        body {
            background-color: rgb(17, 17, 17);
            color: white;
            font-family: "Roboto", sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 715px;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px;
            border-radius: 10px;
        }

        input.form-control,
        select.form-select {
            background-color: black;
            border-color: white;
            color: white;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
        }

        input.form-control:focus,
        select.form-select:focus,
        textarea.form-control:focus {
            background-color: black;
            border-color: white;
            color: white;
        }

        textarea.form-control {
            background-color: black;
            border-color: white;
            color: white;
            width: 100%;
            height: 70%;
        }

        .btn-primary {
            background-color: #00bb2d;
            border-color: #00bb2d;
            color: black;
            margin: 0 auto;
            display: block;
            width: 50%;
            height: 60px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 30px;
        }

        button.btn-primary:hover {
            background-color: #10ff10;
            border-color: #10ff10;
            color: black;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{ $slot }}
</body>

</html>
