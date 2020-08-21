<?php

namespace Hegedustibor\LaravelFaviconGenerator;

use Hegedustibor\LaravelFaviconGenerator\Commands\LaravelFaviconGeneratorCommand;
use Illuminate\Support\ServiceProvider;

class LaravelFaviconGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/Laravel Favicon Generator.php' => config_path('Laravel Favicon Generator.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/Laravel Favicon Generator'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_Laravel Favicon Generator_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_Laravel Favicon Generator_table.php'),
                ], 'migrations');
            }

            $this->commands([
                LaravelFaviconGeneratorCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Laravel Favicon Generator');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/Laravel Favicon Generator.php', 'Laravel Favicon Generator');
    }
}
