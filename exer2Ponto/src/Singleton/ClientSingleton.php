<?php

namespace Forseti\exer2Ponto\Singleton;

use Forseti\exer2Ponto\Enums\Url;
use GuzzleHttp\Client;

class ClientSingleton
{
    use Singleton;

    public static function createInstanse()
    {
        $config = [
          'debug' => false,
          'headers' => [
              'User-Agent' => Url::USER
          ],
            'cookies' => true,
            'verify' => false
        ];
        return new Client($config);
    }

}