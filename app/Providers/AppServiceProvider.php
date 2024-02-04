<?php

namespace App\Providers;

use App\Repositories\ForumRepositoryInterface;
use ForumEloquentORM;
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
