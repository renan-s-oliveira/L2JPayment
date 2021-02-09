<?php

namespace L2JPayment\Providers;

use Illuminate\Support\ServiceProvider;

class L2JPaymentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/l2jpayment.php' => config_path('l2jpayment.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../config/l2jdatabase.php' => config_path('database.php'),
        ], 'config-database');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/seeds/PaymentMethodsTableSeeder.php' => database_path('seeds/RandomableTableSeeder.php'),
        ], 'payment-method-seeds');
        
        $this->publishes([
            __DIR__ . '/../database/seeds/DonateStatusTableSeeder.php' => database_path('seeds/RandomableTableSeeder.php'),
        ], 'donate-status-seeds');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }    
}
