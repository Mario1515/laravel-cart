<?php

namespace Mario1515\LaravelCart;

use Illuminate\Support\ServiceProvider;

use Mario1515\LaravelCart\Cart\CartManager;
use Mario1515\LaravelCart\Repositories\CartRepository;

class LaravelCartServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Repository binding
        $this->app->singleton(CartRepository::class, fn () => new CartRepository());

        // Service binding
        $this->app->singleton(CartService::class, function ($app) {
            return new CartService(
                $app->make(CartRepository::class)
            );
        });

        // Manager binding (Facade target)
        $this->app->singleton('laravel-cart', function ($app) {
            return new CartManager(
                $app->make(CartService::class)
            );
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            $this->publishes([
                __DIR__ . '/../database/migrations' =>
                    $this->app->databasePath('migrations'),
            ], 'laravel-cart-migrations');
        }
    }
}
