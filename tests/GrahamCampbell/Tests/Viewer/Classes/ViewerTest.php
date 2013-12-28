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

namespace GrahamCampbell\Tests\Viewer\Classes;

use Mockery;
use PHPUnit_Framework_TestCase;
use Illuminate\View\View;
use GrahamCampbell\Viewer\Classes\Viewer;

/**
 * This is the viewer test class.
 *
 * @package    Laravel-Viewer
 * @author     Graham Campbell
 * @copyright  Copyright 2013 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Viewer/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Viewer
 */
class ViewerTest extends PHPUnit_Framework_TestCase
{
    public function testMake()
    {
        $viewer = $this->getViewer();
        $view = $this->getView();

        $viewer->getView()->shouldReceive('make')->once()
            ->with('test', array('example' => 'qwerty'))->andReturn($view);

        $return = $viewer->make('test', array('example' => 'qwerty'));

        $this->assertInstanceOf('Illuminate\View\View', $return);
    }

    protected function getViewer()
    {
        $view = Mockery::mock('Illuminate\View\Environment');

        return new Viewer($view);
    }

    protected function getView()
    {
        $view = Mockery::mock('Illuminate\View\Environment');
        $engine = Mockery::mock('Illuminate\View\Engines\EngineInterface');
        $name = 'test';
        $path = __DIR__;
        $data = array('example' => 'qwerty');
        return new View($view, $engine, $name, $path, $data);
    }
}