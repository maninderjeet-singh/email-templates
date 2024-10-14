<?php

namespace Maninderjeet\EmailTemplate\Providers;

use Illuminate\Support\ServiceProvider;

class EmailTemplateProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'email-template');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
