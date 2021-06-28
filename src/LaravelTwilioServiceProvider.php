<?php

namespace Davealex\LaravelTwilio;

use Davealex\LaravelTwilio\Services\EmailOtpSender;
use Davealex\LaravelTwilio\Services\SmsOtpSender;
use Illuminate\Support\ServiceProvider;

class LaravelTwilioServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-twilio');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-twilio');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-twilio.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-twilio'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-twilio'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-twilio'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-twilio');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-twilio', function () {
            if (request('type') === 'sms') {
                return new SmsOtpSender;
            } elseif (request('type') === 'email') {
                return new EmailOtpSender;
            }
        });
    }
}
