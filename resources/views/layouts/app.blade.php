<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiba Kharma - Portfolio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('components.navbar')

<main>
    @yield('content')
</main>

@include('components.footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>s
