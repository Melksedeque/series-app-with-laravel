<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main class="main-site d-flex flex-column justify-content-between">
        @include('components.header')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><i class="bi bi-x-octagon-fill"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success.message'))
            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill"></i> {{ session('success.message') }}
            </div>
        @endif


        <div class="container">
            {{ $slot }}
        </div>

        @include('components.footer')
    </main>
</body>
</html>
