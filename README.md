Htmldom
=======

A Htmldom package for Laravel 4 and 5 based on Simple HTML Dom Parser

## Installation

Add the following line to the `require` section of `composer.json`:

```json
{
    "require": {
        "yangqi/htmldom": "dev-master"
    }
}
```

## Laravel 5 Setup (same as Laravel 4)

1. Add the service provider to `config/app.php`.

```php
'providers' => array(
    ...
	'Yangqi\Htmldom\HtmldomServiceProvider',
    ...
```
2. Add alias to `config/app.php`.

```php
'aliases' => array(	
    ...
	'Htmldom' => 'Yangqi\Htmldom\Htmldom',
    ...
```

## Usage

1. Use following:

```php
$html = new \Htmldom('http://www.example.com');

// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
```

## Using a proxy

```php
$auth = base64_encode('proxy_user:pxosy_password');
$context = array
(
    'http' => array
    (
        'proxy' => 'my.proxy.com:8080',
        'request_fulluri' => true,
        'header' => "Proxy-Authorization: Basic $auth",
    ),
);
$context = stream_context_create($context);
$html = new Htmldom($url, true, true, 'UTF-8', true, "\r\n", " ", $context );
```
See the detailed documentation http://simplehtmldom.sourceforge.net/manual.htm

