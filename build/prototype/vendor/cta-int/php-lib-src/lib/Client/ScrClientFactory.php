<?php

/**
 * @package     Teemr\Src
 * @author      Dave Li <http://www.github.com/daveli>
 * @copyright   Copyright (C) 2014-2016 Dipity B.V. - The Netherlands
 * @license     MPL2 (Mozilla Public License Version 2.0) <https://www.mozilla.org/en-US/MPL/2.0/>
 */

namespace Teemr\Scr\Client;

use GuzzleHttp\Client;

class ScrClientFactory
{
    public function getClient($config = [])
    {
        $client = new Client($config);

        return new ScrClient($client);
    }
}
