<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Handler\SlackWebhookHandler;
use Monolog\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('services.log_slack_webhook') !== null) {
            $monolog = \Log::getMonolog();
            $slackHandler = new SlackWebhookHandler(config('services.log_slack_webhook'));
            $slackHandler->setLevel(Logger::INFO);
            $monolog->pushHandler($slackHandler);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
