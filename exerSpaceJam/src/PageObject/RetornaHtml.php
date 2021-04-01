<?php

namespace Forseti\exerSpaceJam\PageObject;

use Forseti\exerSpaceJam\Enums\Url;

class RetornaHtml extends AbstractPageObject
{
    public function getResposta()
    {
        return $this->request('GET', Url::HOME,
            [
                'verify' => false
            ],'Erro na requisiçao');
    }

    public function getHtml()
    {
        return $this->getResposta()->getBody()->getContents();
    }
}