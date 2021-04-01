<?php

namespace Forseti\exer2Ponto\Parser;

class TokenParser extends AbstractParser
{
    public function getToken()
    {
        return $this->crawler->filterXPath('//*[@id="app"]/main/div/div/div/div/div[2]/form/input')->attr('value');
    }
}