<!DOCTYPE html>
<html>
    <head>
        <title>L5.2 App</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('header')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @yield('content')
                </div>
            </div>
        </div>
        @yield('footer')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
