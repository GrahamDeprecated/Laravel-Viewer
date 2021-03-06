Laravel Viewer
==============


[![Build Status](https://img.shields.io/travis/GrahamCampbell/Laravel-Viewer/master.svg)](https://travis-ci.org/GrahamCampbell/Laravel-Viewer)
[![Coverage Status](https://img.shields.io/coveralls/GrahamCampbell/Laravel-Viewer/master.svg)](https://coveralls.io/r/GrahamCampbell/Laravel-Viewer)
[![Software License](https://img.shields.io/badge/license-Apache%202.0-brightgreen.svg)](https://github.com/GrahamCampbell/Laravel-Viewer/blob/master/LICENSE.md)
[![Latest Version](https://img.shields.io/github/release/GrahamCampbell/Laravel-Viewer.svg)](https://github.com/GrahamCampbell/Laravel-Viewer/releases)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer/badges/quality-score.png?s=4fd9b3b3b089dec1525c14e62d06aba785436bdd)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/04eb190d-28d1-47c5-94e0-1e47c3bc84bf/mini.png)](https://insight.sensiolabs.com/projects/04eb190d-28d1-47c5-94e0-1e47c3bc84bf)


## WARNING

#### This package is depreciated, and is no longer maintained.


## What Is Laravel Viewer?

Laravel Viewer is a view workaround for [Laravel 4.1](http://laravel.com).

* Laravel Viewer was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).
* Laravel Viewer uses [Travis CI](https://travis-ci.org/GrahamCampbell/Laravel-Viewer) with [Coveralls](https://coveralls.io/r/GrahamCampbell/Laravel-Viewer) to check everything is working.
* Laravel Viewer uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer) and [SensioLabsInsight](https://insight.sensiolabs.com/projects/04eb190d-28d1-47c5-94e0-1e47c3bc84bf) to run additional checks.
* Laravel Viewer uses [Composer](https://getcomposer.org) to load and manage dependencies.
* Laravel Viewer provides a [change log](https://github.com/GrahamCampbell/Laravel-Viewer/blob/master/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Viewer/releases), and [api docs](http://grahamcampbell.github.io/Laravel-Viewer).
* Laravel Viewer is licensed under the Apache License, available [here](https://github.com/GrahamCampbell/Laravel-Viewer/blob/master/LICENSE.md).


## System Requirements

* PHP 5.4.7+ or HHVM 3.0+ is required.
* You will need [Laravel 4.1](http://laravel.com) because this package is designed for it.
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of Laravel Viewer.


## Installation

Please check the system requirements before installing Laravel Viewer.

To get the latest version of Laravel Viewer, simply require `"graham-campbell/viewer": "0.2.*@alpha"` in your `composer.json` file. You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Viewer is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.

* `'GrahamCampbell\Viewer\ViewerServiceProvider'`

You can register the Viewer facade in the `aliases` key of your `app/config/app.php` file if you like.

* `'Viewer' => 'GrahamCampbell\Viewer\Facades\Viewer'`


## Configuration

Laravel Viewer requires no configuration. Just follow the simple install instructions and go!


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/Laravel-Viewer
) for Laravel Viewer.

You may see an example of implementation in [Laravel Navigation](https://github.com/GrahamCampbell/Laravel-Navigation) or [Bootstrap CMS](https://github.com/GrahamCampbell/Bootstrap-CMS).


## Updating Your Fork

Before submitting a pull request, you should ensure that your fork is up to date.

You may fork Laravel Viewer:

    git remote add upstream git://github.com/GrahamCampbell/Laravel-Viewer.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).

You can then update the branch:

    git pull --rebase upstream master
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.


## Pull Requests

Please review these guidelines before submitting any pull requests.

* When submitting bug fixes, check if a maintenance branch exists for an older series, then pull against that older branch if the bug is present in it.
* Before sending a pull request for a new feature, you should first create an issue with [Proposal] in the title.
* Please follow the [PSR-2 Coding Style](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PHP-FIG Naming Conventions](https://github.com/php-fig/fig-standards/blob/master/bylaws/002-psr-naming-conventions.md).


## License

Apache License

Copyright 2013-2014 Graham Campbell

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
