# Laravel Nova iFrame Field 

This Laravel Nova field enables you to display HTML in an iFrame so it does not affect any of the other HTML on the page.
It is only visible on the Details view.

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require metrixinfo/nova-iframe
```

## Usage

Add the field to your resource in the ```fields``` method:

```php
use Metrixinfo\Nova\Fields\Iframe\Iframe;
...
...
Iframe::make('HTML Content','html_content'),
```

If you are only storing a URL and would like that previewed in the iFrame, you can use a closure to retrieve the HTML.
This also helps getting around iframe security issues such as http content being called from https.
You can use file_get_contents, curl, GuzzleHttp etc. to retrieve the HTML content.

```php
use Metrixinfo\Nova\Fields\Iframe;
...
...
Iframe::make('HTML Content', function (){
    return \file_get_contents('https://www.google.com/');
}),
```

## Options

### Size
You may pass in the size of the iframe. Values can be numeric or string.

```php
use Metrixinfo\Nova\Fields\Iframe\Iframe;
...
...
Iframe::make('HTML Content','html_content')->size('100%', 600),
```

### Style
You may pass CSS styles to the iframe.

```php
use Metrixinfo\Nova\Fields\Iframe\Iframe;
...
...
Iframe::make('HTML Content','html_content')->style('border: 10px solid black;'),
```

### Classes
You may pass in classes to the iframe.

```php
use Metrixinfo\Nova\Fields\Iframe\Iframe;
...
...
Iframe::make('HTML Content','html_content')->classes('iframe-bordered iframe-large'),
```

### Options may be chained
ie: 
```php
use Metrixinfo\Nova\Fields\Iframe\Iframe;
...
...
Iframe::make('HTML Content','html_content')
    ->style('border: 10px solid black;')
    ->size('100%', 600)
    ->classes('iframe-bordered iframe-large'),
```

Note: _Iframe will only be displayed on the Detail view_
