<?php

namespace Hassandevtips\DarkTheme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Console\AboutCommand;


class DarkThemeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        // Specify the path to package views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'darktheme');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dark-theme/'),
        ], 'dark-theme');

        // Specify the path to publishable assets
        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/dark-theme/'),
        ], 'dark-theme-assets');

        // Blade Component
        Blade::componentNamespace('Hassandevtips\\DarkTheme\\Views\\Components', 'darktheme');

        // Commands
        AboutCommand::add('Bootstrap Dark Theme By Hassandevtips', fn () => ['Version' => '1.0.0']);

    }
}
