<nav class="navbar navbar-expand-md bg-dark navbar-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- Item -->
            <li class="nav-item">
                <a class="nav-link {{ isActiveRoute('/') }}" href="{{ url('/') }}">{{ $menu[0] }}</a>
            </li>
            <!-- Item -->
            <li class="nav-item">
                <a class="nav-link {{ isActiveRoute('news') }}" href="{{ url('news') }}">{{ $menu[1] }}</a>
            </li>
            <!-- Item -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu[2] }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Общая информация</a>
                    <a class="dropdown-item" href="#">Структура организации</a>
                    <a class="dropdown-item" href="#">Часы приема</a>
                    <a class="dropdown-item" href="#">Режим работы</a>
                    <a class="dropdown-item" href="#">Вакансии</a>
                    <a class="dropdown-item" href="#">Информация о МКД</a>
                    <a class="dropdown-item" href="#">Проект договора управления</a>
                    <a class="dropdown-item" href="#">Раскрытие информации</a>
                    <a class="dropdown-item" href="#">Административная ответственность</a>
                    <a class="dropdown-item" href="#">Пресса о нас</a>
                    <a class="dropdown-item" href="#">Полезная информация</a>
                    <a class="dropdown-item" href="#">Контакты</a>
                </div>
            </li>
            <!-- Item -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu[3] }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Платные услуги</a>
                    <a class="dropdown-item" href="#">Тарифы</a>
                    <a class="dropdown-item" href="#">Качество услуг</a>
                    <a class="dropdown-item" href="#">Энергоэффективность</a>
                    <a class="dropdown-item" href="#">Меры по снижению расходов</a>                                
                </div>
            </li>
            <!-- Item -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu[4] }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Годовая бухгалтерская отчетность</a>
                    <a class="dropdown-item" href="#">Сведения о доходах и расходах</a>
                    <a class="dropdown-item" href="#">Текущий ремонт</a>
                    <a class="dropdown-item" href="#">Фактическая среднемесячная температура</a>
                    <a class="dropdown-item" href="#">Фотоотчёт по текущему и капитальному ремонту</a>
                    <a class="dropdown-item" href="#">Закупки</a>
                    <a class="dropdown-item" href="#">Акты сверки РСО</a>
                    <a class="dropdown-item" href="#">Разное</a>
                </div>
            </li>
            <!-- Item -->
            <li class="nav-item">
                <a class="nav-link {{ isActiveRoute('reception') }}" href="{{ url('reception') }}">{{ $menu[5] }}</a>
            </li>
        </ul>
    </div>
</nav>