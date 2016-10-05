<?php

/**
 * @package     Teemr\Src
 * @author      Dave Li <http://www.github.com/daveli>
 * @copyright   Copyright (C) 2014-2016 Dipity B.V. - The Netherlands
 * @license     MPL2 (Mozilla Public License Version 2.0) <https://www.mozilla.org/en-US/MPL/2.0/>
 */

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