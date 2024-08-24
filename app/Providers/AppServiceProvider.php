<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Tweets;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Relation::enforceMorphMap([
            'Tweets' => Tweets::class,
            'User' => User::class
        ]);
    }
}
