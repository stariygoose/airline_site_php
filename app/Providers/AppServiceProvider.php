<?php

namespace App\Providers;

use App\Interfaces\AirportsRepositoryInterface;
use App\Repository\AirportsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(AirportsRepositoryInterface::class, AirportsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
