<?php

namespace App\Providers;

use App\Contracts\UserContract;
use App\Http\Repositories\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserContract::class, UserRepository::class);
    }
}
