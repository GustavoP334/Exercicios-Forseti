<?php

namespace Forseti\exer2Ponto\Parser;

use Forseti\exer2Ponto\Iterator\TableIterator;

class TableParser extends AbstractParser
{
    public function getIterator()
    {
        return new TableIterator($this->crawler->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr'));
    }
}