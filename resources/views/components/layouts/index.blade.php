<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortFolio</title>
    @include('components.link')
    @stack('css')
</head>
<body class="index-page">
    @include('components.layouts.header')

    @yield('content')

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    @include('components.layouts.footer')
    @include('components.script')
</body>
</html>