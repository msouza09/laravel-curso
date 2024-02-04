<?php

namespace App\Providers;

use App\Repositories\{ForumEloquentORM};
use App\Repositories\{ForumRepositoryInterface};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ForumRepositoryInterface::class, 
            ForumEloquentORM::class
    );
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
