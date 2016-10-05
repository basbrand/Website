# PHP Library for the CTA Shared Content Repository

## Description

This PHP allows you to communicate with the CTA Shared Content Repository API

This component was developed by [Teemr](http://www.teemr.works).

## Basic Example

### Get all (20) events

```
<?php

require __DIR__ . '/../vendor/autoload.php';

use Teemr\Scr\Client\ScrClientFactory;

$authorization = ''; // Set JWT Token here.

$config['defaults']['headers']['Authorization'] = 'Bearer ' . $authorization;

$srcClient = (new ScrClientFactory())->getClient($config);
$srcClient->setDescription(__DIR__ . '/../lib/Config/description.json');

$response = $srcClient->getEvents([]);

echo '<pre>';
print_r($response);
echo '<pre>';
```