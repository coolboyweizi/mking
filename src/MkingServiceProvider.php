<?php

namespace Mking\Packages;

use Illuminate\Support\ServiceProvider;

class MkingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        # 拷贝配置文件
        $this->publishes([
            __DIR__.'/../config/mking.php' => config_path('mking.php')
        ]);
    }
}
