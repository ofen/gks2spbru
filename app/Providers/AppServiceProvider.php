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
        $data = array(
            'Главная',
            'Новости',
            'О компании',
            'Услуги',
            'Планы и отчеты',
            'Интернет приемная',
        );

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
