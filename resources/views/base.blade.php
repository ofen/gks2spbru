<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="static/css/custom.css">
        <title>{{ env('SITE_NAME') }}</title>
    </head>
    <body>
        <!-- Header -->
        <div class="jumbotron logo">
            <img class="mobile" src="/static/img/mobile_logo.png">
            <img class="desktop" src="/static/img/desktop_logo.png">
        </div>
        <!-- Navigation -->
        @include('navigation-bar')
        <!-- Content -->
        <div class="container-fluid">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- Footer -->
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container-fluid"> 
                <p class="navbar-text">ofen {{ date('Y') }}</p>
            </div>
        </nav>
        <!-- jQuery and Bootstrap JS -->
        <script src="static/js/jquery-3.3.1.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
    </body>
</html>