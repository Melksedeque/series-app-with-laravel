<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')

    <div class="container">
        <div class="page-header d-flex justify-content-between align-items-center mb-3">
            <h1>{{ $title }}</h1>

        {{ $slot }}
    </div>
</body>
</html>
