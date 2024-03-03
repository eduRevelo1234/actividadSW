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

        #registro_usuario_form {
            width: 715px;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="password"] {
            background-color: black;
            border-color: white;
            color: white;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid white;
        }

        form button[type="submit"] {
            background-color: #00bb2d;
            border-color: #00bb2d;
            color: black;
            width: 100%;
            height: 60px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 30px;
            cursor: pointer;
        }

        form h2,
        form label {
            color: white;
        }

        body {
            background-color: black;
        }

        form select,
        select.form-select {
            background-color: black;
            border-color: white;
            color: white;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
        }

        form textarea,
        textarea.form-control {
            background-color: black;
            border-color: white;
            color: white;
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
        }

        .custom-error-list {
            color: red;
            font-size: 14px;
        }

        .btn-primary:hover {
            background-color: #10ff10;
            border-color: #10ff10;
            color: black;
        }

        textarea.form-control:focus {
            background-color: black;
            border-color: white;
            color: white;
        }

        .input-error {
            border: 1px solid red !important;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{ $slot }}
</body>

</html>
