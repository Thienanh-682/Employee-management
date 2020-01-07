<?php

namespace App\Providers;

use App\Http\Repositories\eloquent\StaffEloquentRepository;
use App\Http\Repositories\StaffRepositoryInterface;
use App\Http\services\impl\StaffServices;
use App\Http\services\StaffServicesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StaffServicesInterface::class,StaffServices::class);
        $this->app->singleton(StaffRepositoryInterface::class,StaffEloquentRepository::class);
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
