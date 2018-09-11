<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="static/css/custom.css">
        <link rel="stylesheet" href="static/css/bootstrap.min.css">

        <title>{{ env('SITE_NAME') }}</title>
    </head>
    <body>
        <!-- Header -->
        <header class="logo">
            <div class="container-fluid">
                <img class="mobile" src="/static/img/mobile_logo.png">
                <img class="desktop" src="/static/img/desktop_logo.png">
            </div>
        </header>
        <!-- Navigation -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="{{ isActiveRoute('/') }}" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ isActiveRoute('news') }}" href="/news">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ isActiveRoute('about') }}" href="/about">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ isActiveRoute('pricing') }}" href="/pricing">Тарифы</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid"> 
                <span class="text-muted">ofen {{ date('Y') }}</span>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="static/js/jquery-3.3.1.slim.min.js"></script>
        <script src="static/js/popper.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
    </body>
</html>