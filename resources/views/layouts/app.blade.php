<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('icons/fonts/bootstrap-icons.woff') }}">
    <link rel="stylesheet" href="{{ asset('icons/fonts/bootstrap-icons.woff2') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <title>Laravel</title>
</head>

<body>
    @include("components.header")
    <section class="wrapper">
        <div class="container py-4">
            @yield("content")
        </div>
    </section>
    @include("components.footer")
</body>

</html>
