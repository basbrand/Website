<?php

/**
 * @package     Teemr\Src
 * @author      Dave Li <http://www.github.com/daveli>
 * @copyright   Copyright (C) 2014-2016 Dipity B.V. - The Netherlands
 * @license     MPL2 (Mozilla Public License Version 2.0) <https://www.mozilla.org/en-US/MPL/2.0/>
 */

namespace Teemr\Scr\Client;

use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;

use Teemr\Scr\Exception\ExceptionFactory;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

use Guzzle\Service\Loader\JsonLoader;
use Symfony\Component\Config\FileLocator;

use GuzzleHttp\Command\Event\ProcessEvent;

class ScrClient implements ScrClientInterface
{
    /**
     * @var ClientInterface
     */
    private $baseClient;

    /**
     * @var Description
     */
    private $description;

    /**
     * @var string
     */
    private $locator;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $baseClient
     */
    public function __construct(ClientInterface $baseClient)
    {
        $this->baseClient = $baseClient;
        $this->locator = new FileLocator();

        $this->setDescription();
    }

    public function setDescription($path = __DIR__ . '/../Config/description.json')
    {
        $locator = new FileLocator();
        $loader = new JsonLoader($locator);

        if ($path) {
            $this->path = $path;
        }

        $description = $loader->load($locator->locate($this->path));
        $this->description = new Description($description);

        $this->setClient();

        return $this;
    }

    public function call($method, array $options = [])
    {
        $exceptionFactory = new ExceptionFactory();

        $command = $this->client->getCommand($method, $options);

        $command->getEmitter()->on('process', function(ProcessEvent $e) use ($exceptionFactory) {
            if ($e->getException()) {
                throw $exceptionFactory->create($e->getException());
            }
        });

        return $this->client->execute($command);
    }

    public function setClient()
    {
        $this->client = new GuzzleClient($this->baseClient, $this->description);

        return $this;
    }

    public function __call($method, $args)
    {
        if (!in_array($method, get_class_methods($this)))
        {
            return $this->call($method, array_shift($args));
        }

        return call_user_func_array($method, $args);
    }
}
