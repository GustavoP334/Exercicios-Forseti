<?php

namespace Forseti\exerSpaceJam\PageObject;

use Forseti\exerSpaceJam\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function request($method, $url, array $params = [], $messageException)
    {
        try {
            return $this->client->request($method, $url, $params);
        } catch (GuzzleException $e) {
            $this->error($messageException, ['Exception' => $e]);

            return null;
        }
    }
}