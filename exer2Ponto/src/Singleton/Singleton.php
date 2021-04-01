<?php

namespace Forseti\exer2Ponto\Singleton;

trait Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance === null){
            self::$instance = self::createInstanse();
        }
        return self::$instance;
    }
}