<?php

namespace Malcolmknott\Redirector;

use Illuminate\Support\ServiceProvider;

class RedirectorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'redirector');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/redirector'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Malcolmknott\Redirector\RedirectController');
    }
}
