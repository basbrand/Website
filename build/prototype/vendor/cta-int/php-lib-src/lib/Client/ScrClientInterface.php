<?php

/**
 * @package     Teemr\Src
 * @author      Dave Li <http://www.github.com/daveli>
 * @copyright   Copyright (C) 2014-2016 Dipity B.V. - The Netherlands
 * @license     MPL2 (Mozilla Public License Version 2.0) <https://www.mozilla.org/en-US/MPL/2.0/>
 */

namespace Teemr\Scr\Client;

use Teemr\Scr\Exception\ScrRestApiException;
use Psr\Http\Message\ResponseInterface;

interface ScrClientInterface
{
    /**
     * We need this method to set the Description used by the GuzzleClient
     *
     * @param $path
     */
    public function setDescription($path);

    /**
     * It resolves http request to Scr.io REST API
     *
     * @param string $method
     * @param array $options
     * @return ResponseInterface|ScrRestApiException
     */
    public function call($method, array $options = []);

    /**
     * We need this method to replace the GuzzleClient instance when a new Description is set
     *
     * @return $this
     */
    public function setClient();
}
