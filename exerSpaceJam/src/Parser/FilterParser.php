<?php

namespace Forseti\exerSpaceJam\Parser;

use Forseti\exerSpaceJam\Iterator\TabelaIterator;

class FilterParser extends AbstractParser
{
    public function getIterator()
    {
        return new TabelaIterator($this->crawler->filterXPath('//html/body/center/table'));
    }
}