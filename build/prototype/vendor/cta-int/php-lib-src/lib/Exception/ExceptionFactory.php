<?php

/**
 * @package     Teemr\Src
 * @author      Dave Li <http://www.github.com/daveli>
 * @copyright   Copyright (C) 2014-2016 Dipity B.V. - The Netherlands
 * @license     MPL2 (Mozilla Public License Version 2.0) <https://www.mozilla.org/en-US/MPL/2.0/>
 */

namespace Teemr\Scr\Exception;

use GuzzleHttp\Command\Exception\CommandException;

class ExceptionFactory
{
    /**
     * @param CommandException $baseException
     * @return ScrRestApiException
     */
    public function create(CommandException $baseException)
    {
        $message = $baseException->getMessage();

        return new ScrRestApiException($message, 400);
    }
}
