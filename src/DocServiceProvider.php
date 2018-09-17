<?php

namespace Weasy\Doc;

use Illuminate\Support\ServiceProvider;
use Weasy\Doc\Console\DocCommand;

class DocServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // 路由
        $this->loadRoutesFrom(__DIR__ . '/router.php');

        // 配置
        $this->publishes([__DIR__.'/../config/config.php' => config_path('doc.php')], 'doc.config');

        // view
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'doc');

        if ($this->app->runningInConsole()) {
            $this->commands([
                DocCommand::class,
            ]);
        }
    }

    public function register()
    {

        $this->app->singleton("doc", function ($app) {
            return new Doc();
        });
    }

}