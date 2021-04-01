<?php

namespace Forseti\exer2Ponto\Regex;

abstract class TableRejex
{
    public static function getHora($str)
    {
        $rejex = '/\d*/m';

        preg_match_all($rejex, $str, $matches, PREG_SET_ORDER, 0);

        return $matches [0][0] . ' Horas';
    }

    public static function getMinuto($str)
    {
        $rejex = '/\d*/m';

        preg_match_all($rejex, $str, $matches, PREG_SET_ORDER, 0);

        return $matches [2][0] . ' Minutos';
    }

    public static function getSegundo($str)
    {
        $rejex = '/\d*/m';

        preg_match_all($rejex, $str, $matches, PREG_SET_ORDER, 0);

        return $matches [4][0] . ' Segundos';
    }
}