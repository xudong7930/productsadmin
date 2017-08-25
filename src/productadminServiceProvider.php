<?php

namespace xudong7930\productadmin;

use Illuminate\Support\ServiceProvider;

class productadminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->routesAreCached()) {
            return __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(base_path('resources/views'), 'productadmin');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views')
        ]);

        $this->publishes([
            __DIR__.'/migrations' => database_path('databases/migrations')
        ], 'migrations');
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