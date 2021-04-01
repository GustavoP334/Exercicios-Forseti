<?php

namespace Forseti\exer2Ponto\PageObject;

use Forseti\exer2Ponto\Bean\TableBean;
use Forseti\exer2Ponto\Enums\Url;
use Forseti\exer2Ponto\Parser\TableParser;

class TablePageObject extends AbstractPageObject
{
    use TableBean;

    public function getResponse()
    {
        return $this->request('POST', Url::LOGIN,
        [
            'form_params'=> [
                '_token' => (new TokenPageObject())->getParserToken()->getToken(),
                'email' => $this->user,
                'password' => $this->password
            ]
        ]);
    }

    public function getHtml()
    {
        return $this->getResponse()->getBody()->getContents();
    }

    public function getParserTable()
    {
        return new TableParser($this->getHtml());
    }
}