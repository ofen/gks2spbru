<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="static/css/custom.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <title>{{ env('SITE_NAME') }}</title>
    </head>
    <body>
        <!-- Header -->
        <div class="container-fluid logo">
            <img class="mobile" src="/static/img/mobile_logo.png">
            <img class="desktop" src="/static/img/desktop_logo.png">
        </div>
        <!-- Navigation -->
        <div class="container-fluid">
            @include('navigation-bar')
        </div>
        <!-- Content -->
        <div class="container-fluid">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- Footer -->
        <div class="container-fluid footer"> 
            <span class="text-muted">ofen {{ date('Y') }}</span>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="static/js/jquery-3.3.1.slim.min.js"></script>
        <script src="static/js/popper.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
    </body>
</html>