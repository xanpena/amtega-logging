# Amtega Logging PHP Formatter

Useful class to customize log messages  in Laravel following Amtega (Xunta de Galicia) standards.

## Installation

You can install the package via composer:

```bash
composer require xanpena/amtega-logging
```

Change the formatter in channels configuration of your config/logging.php file:

```php

    'single' => [
        'driver' => 'single',
        'path'   => storage_path('logs/laravel.log'),
        'level'  => env('LOG_LEVEL', 'debug'),
    ],

    'daily' => [
        'driver' => 'daily',
        'tap'    => [Xanpena\AmtegaLogging\AmtegaFormatter::class],
        'path'   => storage_path('logs/laravel-daily.log'),
        'level'  => env('LOG_LEVEL', 'debug'),
        'days'   => 14,
    ],

```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please using the issue tracker.

## Credits

- [:Xan Pena](https://github.com/xanpena)
