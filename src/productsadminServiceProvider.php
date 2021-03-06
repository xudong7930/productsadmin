<?php

namespace xudong7930\productsadmin;

use Illuminate\Support\ServiceProvider;

class productsadminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(base_path('resources/views'), 'productsadmin');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
            __DIR__.'/migrations' => database_path('migrations')
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}