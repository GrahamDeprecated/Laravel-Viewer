Laravel Viewer
==============


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/GrahamCampbell/Laravel-Viewer/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
[![Build Status](https://travis-ci.org/GrahamCampbell/Laravel-Viewer.png?branch=develop)](https://travis-ci.org/GrahamCampbell/Laravel-Viewer)
[![Coverage Status](https://coveralls.io/repos/GrahamCampbell/Laravel-Viewer/badge.png?branch=develop)](https://coveralls.io/r/GrahamCampbell/Laravel-Viewer)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer/badges/quality-score.png?s=4fd9b3b3b089dec1525c14e62d06aba785436bdd)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer)
[![Latest Version](https://poser.pugx.org/graham-campbell/viewer/v/stable.png)](https://packagist.org/packages/graham-campbell/viewer)
[![Still Maintained](http://stillmaintained.com/GrahamCampbell/Laravel-Viewer.png)](http://stillmaintained.com/GrahamCampbell/Laravel-Viewer)


## What Is Laravel Viewer?

Laravel Viewer is a view workaround for [Laravel 4.1](http://laravel.com).  

* Laravel Viewer was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).  
* Laravel Viewer uses [Travis CI](https://travis-ci.org/GrahamCampbell/Laravel-Viewer) to run tests to check if it's working as it should.  
* Laravel Viewer uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Viewer) and [Coveralls](https://coveralls.io/r/GrahamCampbell/Laravel-Viewer) to run additional tests and checks.  
* Laravel Viewer uses [Composer](https://getcomposer.org) to load and manage dependencies.  
* Laravel Viewer provides a [change log](https://github.com/GrahamCampbell/Laravel-Viewer/blob/develop/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Viewer/releases), and a [wiki](https://github.com/GrahamCampbell/Laravel-Viewer/wiki).  
* Laravel Viewer is licensed under the Apache License, available [here](https://github.com/GrahamCampbell/Laravel-Viewer/blob/develop/LICENSE.md).  


## System Requirements

* PHP 5.4.7+ or PHP 5.5+ is required.  
* You will need [Laravel 4.1](http://laravel.com) because this package is designed for it.  
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of Laravel Viewer.  


## Installation

Please check the system requirements before installing Laravel Viewer.  

To get the latest version of Laravel Viewer, simply require it in your `composer.json` file.  

`"graham-campbell/viewer": "*"`  

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.  

Once Laravel Viewer is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.  

`'GrahamCampbell\Viewer\ViewerServiceProvider'`  

You can register the Viewer facade in the `aliases` key of your `app/config/app.php` file if you like.  

`'Viewer' => 'GrahamCampbell\Viewer\Facades\Viewer'`  


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/Laravel-Viewer
) for Laravel Viewer.  

You may see an example of implementation in [Laravel Navigation](https://github.com/GrahamCampbell/Laravel-Navigation) or [CMS Core](https://github.com/GrahamCampbell/CMS-Core).  


## Updating Your Fork

The latest and greatest source can be found on [GitHub](https://github.com/GrahamCampbell/Laravel-Viewer).  
Before submitting a pull request, you should ensure that your fork is up to date.  

You may fork Laravel Viewer:  

    git remote add upstream git://github.com/GrahamCampbell/Laravel-Viewer.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).  

You can then update the branch:  

    git pull --rebase upstream develop
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.  


## Pull Requests

Please submit pull requests against the develop branch.  

* Any pull requests made against the master branch will be closed immediately.  
* If you plan to fix a bug, please create a branch called `fix-`, followed by an appropriate name.  
* If you plan to add a feature, please create a branch called `feature-`, followed by an appropriate name.  
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
