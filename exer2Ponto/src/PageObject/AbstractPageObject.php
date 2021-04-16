<?php

namespace Forseti\exer2Ponto\PageObject;

use Forseti\exer2Ponto\Singleton\ClientSingleton;
use Forseti\exer2Ponto\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = ClientSingleton::getInstance();
    }

    public function request($method, $url, array $options = [])
    {
        try {
            return $this->client->request($method, $url, $options);
        } catch (GuzzleException $e) {
            $this->error('Erro ao tentar requisição', ['Exception' => $e]);

            return null;
        }
    }
}