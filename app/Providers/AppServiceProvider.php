<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // Menu structure
        $data = [
            'Главная' => '/',
            'Новости' => 'news',
            'О компании' => [
                'Общая информация' => 'about',
                'Структура организации' => '#',
                'Часы приема' => '#',
                'Режим работы' => '#',
                'Вакансии' => '#',
                'Информация о МКД' => '#',
                'Проект договора управления' => '#',
                'Раскрытие информации' => '#',
                'Административная ответственность' => '#',
                'Пресса о нас' => '#',
                'Полезная информация' => '#',
                'Контакты' => '#',
                'Контакты' => '#',
            ],
            'Услуги' => [
                'Платные услуги' => '#',
                'Тарифы' => '#',
                'Качество услуг' => '#',
                'Энергоэффективность' => '#',
                'Меры по снижению расходов' => '#',
            ],
            'Планы и отчеты' => [
                'Годовая бухгалтерская отчетность' => '#',
                'Сведения о доходах и расходах' => '#',
                'Текущий ремонт' => '#',
                'Фактическая среднемесячная температура' => '#',
                'Фотоотчёт по текущему и капитальному ремонту' => '#',
                'Закупки' => '#',
                'Акты сверки РСО' => '#',
                'Разное' => '#',
            ],
            'Интернет приемная' => 'reception',
        ];

        view()->share('menu', $data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
