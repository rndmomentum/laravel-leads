<?php

namespace Momentumplanet\LaravelLeads;

use Illuminate\Support\ServiceProvider;

class LaravelLeadsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'momentumplanet');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'momentumplanet');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-leads.php', 'laravel-leads');

        // Register the service the package provides.
        $this->app->singleton('laravel-leads', function ($app) {
            return new LaravelLeads;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-leads'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-leads.php' => config_path('laravel-leads.php'),
        ], 'laravel-leads.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/momentumplanet'),
        ], 'laravel-leads.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/momentumplanet'),
        ], 'laravel-leads.views');

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/momentumplanet'),
        ], 'laravel-leads.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
