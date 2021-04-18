<?php

namespace Orapakat\Zenziva\Providers;

use Illuminate\Support\ServiceProvider;

class OrapakatdevServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/config/orapakatdev_zenziva.php' => config_path('orapakatdev_zenziva.php'),
        ]);
    }
}