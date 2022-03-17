<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel - Project</title>
        {{--CSS--}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        {{--Bootstrap CSS--}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        {{--Bootstrap JS--}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body class="bg-secondary">
        @include('partials.header')
        @yield('content')
    </body>
</html>