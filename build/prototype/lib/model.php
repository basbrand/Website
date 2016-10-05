<?php

use Teemr\Scr\Client\ScrClientFactory;

/**
 * This is a very simple class for a model.
 * This is to hook into the SCR from CTA.
 */
class Model {
    private $url = '';
    private static $instance;

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function fetch() {
        die('Called');
    }

    public function getScrClient() {
        $config = array(
            'defaults' => array(
                'headers' => array(
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6ImFlOGE0NzNhLWUwZTAtNDE3MC05YjNkLTQzNTE1MWEzM2YyZCIsImNyZWF0ZWQiOjE0NjkxODYwOTkwMjgsInN5c3RlbVRva2VuIjp0cnVlLCJwcm92aWRlciI6InNjciJ9.1F9FlTt5ocJXHAeyU4VxxVTgE1UMojIb0T3JiVBjauw'
                )
            )
        );

        $srcClient = (new ScrClientFactory())->getClient($config);
        $srcClient->setDescription(__DIR__ . '/src.json');

        return $srcClient;
    }

    public function fetchStub() {
        return array(
            'items' => array(
                array(
                    'name' => 'Jeroen Leijten'
                ),
                array(
                    'name' => 'Babs Gosgens'
                ),
                array(
                    'name' => 'Jasper van Rijbroek'
                )
            )
        );
    }
}
