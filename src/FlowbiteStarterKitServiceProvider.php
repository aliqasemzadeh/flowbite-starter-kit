<?php

namespace YourVendor\FlowbiteStarterKit;

use Illuminate\Support\ServiceProvider;

class FlowbiteStarterKitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register package bindings
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Publish assets
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/flowbite-starter-kit'),
        ], 'flowbite-starter-kit-views');

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/flowbite-starter-kit'),
        ], 'flowbite-starter-kit-assets');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flowbite-starter-kit');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
