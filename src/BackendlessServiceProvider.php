<?php

/*
 * This file is part of Laravel Backendless.
 *
 * (c) Naresh Mehta <naresh.mehta@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nareshmehta\Backendless;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Backendless\Backendless;

/**
 * This is the backendless service provider class.
 *
 * @author Naresh Mehta <naresh.mehta@gmail.com>
 */
class BackendlessServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();

        $this->setupBackendless($this->app);
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/backendless.php');

        $this->publishes([$source => config_path('backendless.php')]);

        $this->mergeConfigFrom($source, 'backendless');
    }

    /**
     * Setup backendless.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function setupBackendless(Application $app)
    {
        $config = $app->config->get('backendless');

        Backendless::initApp($config['app_id'], $config['rest_key'], $config['version']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            //
        ];
    }
}
