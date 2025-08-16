<?php

namespace App\Providers;

use App\Events\MakeAdvsEvent;
use App\Listeners\GenerateDesktopAdxJsFileListener;
use App\Listeners\GenerateHeaderAdxListener;
use App\Listeners\GenerateMobileAdxJsFileListener;
use App\Listeners\GenerateUnderPlayerAdxListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MakeAdvsEvent::class => [
            GenerateHeaderAdxListener::class,
            GenerateDesktopAdxJsFileListener::class,
            GenerateMobileAdxJsFileListener::class,
            GenerateUnderPlayerAdxListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
