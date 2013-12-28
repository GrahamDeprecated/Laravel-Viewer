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

namespace GrahamCampbell\Viewer\Classes;

use Illuminate\View\Environment;

/**
 * This is the viewer class.
 *
 * @package    Laravel-Viewer
 * @author     Graham Campbell
 * @copyright  Copyright 2013 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Viewer/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Viewer
 */
class Viewer
{
    /**
     * The view instance.
     *
     * @var \Illuminate\View\Environment
     */
    protected $view;

    /**
     * Create a new instance.
     *
     * @param  \Illuminate\View\Environment  $view
     * @return void
     */
    public function __construct(Environment $view)
    {
        $this->view = $view;
    }

    /**
     * Get a evaluated view contents for the given view.
     *
     * @param  string  $view
     * @param  array   $data
     * @param  string  $type
     * @return \Illuminate\View\View
     */
    public function make($view, array $data = array(), $type = 'default')
    {
        return $this->view->make($view, $data);
    }

    /**
     * Return the view instance.
     *
     * @return \Illuminate\View\Environment
     */
    public function getView()
    {
        return $this->view;
    }
}
