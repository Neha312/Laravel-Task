<?php

namespace App\Providers;

use App\Services\PaymentGateway;


use App\Services\PaymentServiceContract;
use Illuminate\Support\ServiceProvider;
use PaypalGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentGateway::class, function () {
            return new PaymentGateway('51542');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
