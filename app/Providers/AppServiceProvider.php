<?php

namespace App\Providers;

use App\Domains\Users\Actions\UserConfirms\EmailUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\SmsUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\TelegramUserConfirmApi;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->when(SmsUserConfirmApi::class)
            ->needs(ClientInterface::class)
            ->give(fn () => new Client(config('external-apis.sms')));
        $this->app->when(EmailUserConfirmApi::class)
            ->needs(ClientInterface::class)
            ->give(fn () => new Client(config('external-apis.email')));
        $this->app->when(TelegramUserConfirmApi::class)
            ->needs(ClientInterface::class)
            ->give(fn () => new Client(config('external-apis.telegram')));
    }

    public function boot(): void
    {
        //
    }
}
