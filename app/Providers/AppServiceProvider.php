<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ArticlePostService;
use App\Services\ArticlePostServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ArticlePostServiceInterface::class, ArticlePostService::class);
    }

    public function boot()
    {
        //
    }
}