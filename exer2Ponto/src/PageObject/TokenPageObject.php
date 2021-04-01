<?php

namespace Forseti\exer2Ponto\PageObject;

use Forseti\exer2Ponto\Enums\Url;
use Forseti\exer2Ponto\Parser\TokenParser;

class TokenPageObject extends AbstractPageObject
{
    public function getResponseToken()
    {
        return $this->request('GET', Url::PANEL);
    }

    public function getHtml()
    {
        return $this->getResponseToken()->getBody()->getContents();
    }

    public function getParserToken()
    {
        return new TokenParser($this->getHtml());
    }
}