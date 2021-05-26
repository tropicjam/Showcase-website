<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/basic.js') }}"></script>
        <title>Showcase</title>
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <main id="content">
            @yield('content')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>