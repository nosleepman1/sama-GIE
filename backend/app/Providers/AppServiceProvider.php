<?php

namespace App\Providers;

use App\Listeners\SendVerificationEmail;
use App\Listeners\sendWelcomeEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
        Event::listen(
            Registered::class,
            SendVerificationEmail::class
        );

        Event::listen(
            Verified::class,
            sendWelcomeEmail::class
        );
    }
}
