<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities;

use Illuminate\Support\ServiceProvider;

class CitiesStatesAndNationalitiesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        include __DIR__ . '/../routes/web.php';
        include __DIR__ . '/../routes/api.php';
        $this->app->make('EBarriosBloonde\CitiesStatesAndNationalities\Http\Controllers\CityController');
        $this->app->make('EBarriosBloonde\CitiesStatesAndNationalities\Http\Controllers\StateController');
        $this->app->make('EBarriosBloonde\CitiesStatesAndNationalities\Http\Controllers\CountryController');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
