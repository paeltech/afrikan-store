<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>African | @yield('title', '')</title>
    <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('extra-css')

</head>

<body>

    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @yield('extra-js')

   <!-- UIkit JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
</body>

</html>
