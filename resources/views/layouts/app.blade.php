<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- <link href="/css/app.css" rel="stylesheet">-->
            <link href="/css/bootstrap.css" rel="stylesheet">
            <link href="/css/home.css" rel="stylesheet">
            <link href="/css/font-awesome.css" rel="stylesheet">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.js"></script>
        <title>{{config('app.name', 'SALES')}}</title>

    </head>
    <body>
    <div class="container container-fluid">
        @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>

        @include('inc.footer')
    </div>

    </body>
</html>