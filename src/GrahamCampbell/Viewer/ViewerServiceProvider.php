<?php

/**
 * This file is part of Laravel Viewer by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Viewer;

use Illuminate\Support\ServiceProvider;

/**
 * This is the viewer service provider class.
 *
 * @package    Laravel-Viewer
 * @author     Graham Campbell
 * @copyright  Copyright 2013-2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Viewer/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Viewer
 */
class ViewerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('graham-campbell/viewer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerViewer();
    }

    /**
     * Register the viewer class.
     *
     * @return void
     */
    protected function registerViewer()
    {
        $this->app->bindShared('viewer', function ($app) {
            $view = $app['view'];

            return new Classes\Viewer($view);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array(
            'viewer'
        );
    }
}
