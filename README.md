Laravel Backendless
===================

Laravel Backendless was created by, and is maintained by [Naresh Mehta](https://github.com/wolverine2k), and is a [Backendless SDK](https://github.com/Backendless/PHP-SDK) bridge for [Laravel 5](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/wolverine2k/Laravel-Backendless/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

![Laravel Backendless](https://cloud.githubusercontent.com/assets/1121738/13105802/3e964c30-d565-11e5-94fc-61357b377e98.png)

<!--
<p align="center">
<a href="https://styleci.io/repos/23192065"><img src="https://styleci.io/repos/23192065/shield" alt="StyleCI Status"></img></a>
<a href="https://travis-ci.org/GrahamCampbell/Laravel-Parse"><img src="https://img.shields.io/travis/GrahamCampbell/Laravel-Parse/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse"><img src="https://img.shields.io/scrutinizer/g/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/wolverine2k/Laravel-Backendless/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Latest Version"></img></a>
</p>
-->
## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Laravel Backendless, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require naresh-mehta/backendless
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "naresh-mehta/backendless": "~1.0"
    }
}
```

Once Laravel Backendless is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'NareshMehta\Backendless\BackendlessServiceProvider'`


## Configuration

Laravel Backendless requires configuration/

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/backendless.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

There are three config options:

##### Backendless App Id

This option (`'app_id'`) is where you may specify your backendless app id. The default value for this setting is `'your-app-id'`.

##### Backendless Rest Key

This option (`'rest_key'`) is where you may specify your backendless rest key. The default value for this setting is `'your-rest-key'`.

##### Backendless Version Number

This option (`'version'`) is where you may specify your backendless master key. The default value for this setting is `'backendless-version'`.


## Usage

This package is only responsible for the automatic initialisation of the backendless client. See the backendless docs at https://backendless.com/mobile-developers/quick-start-guide-for-php/.


## Security

If you discover a security vulnerability within this package, please send an e-mail to Naresh Mehta at naresh.mehta@gmail.com. I will try to address them as soon as possible.


## License

Laravel Backendless is licensed under [The MIT License (MIT)](LICENSE).