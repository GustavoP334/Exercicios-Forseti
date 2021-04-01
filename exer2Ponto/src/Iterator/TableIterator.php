<?php

namespace Forseti\exer2Ponto\Iterator;

use Forseti\exer2Ponto\Regex\TableRejex;

class TableIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $object = new \stdClass();

        $object->inicio = $node->getElementsByTagName('td')->item(0)->textContent;
        $object->almoco = $node->getElementsByTagName('td')->item(1)->textContent;
        $object->retorno = $node->getElementsByTagName('td')->item(2)->textContent;
        $object->final = $node->getElementsByTagName('td')->item(3)->textContent;

        $object->hora = TableRejex::getHora($node->getElementsByTagName('td')->item(0)->textContent);
        $object->minuto = TableRejex::getMinuto($node->getElementsByTagName('td')->item(0)->textContent);
        $object->segundo = TableRejex::getSegundo($node->getElementsByTagName('td')->item(0)->textContent);

        return $object;
    }
}