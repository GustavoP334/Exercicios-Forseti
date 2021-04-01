<?php

namespace Forseti\exerSpaceJam\PageObject;

use Forseti\exerSpaceJam\Enums\Url;
use Forseti\exerSpaceJam\Parser\FilterParser;

class RetornaHtmlSiteMap extends AbstractPageObject
{
    public function getRespostaMap()
    {
        return $this->request('GET', Url::SITEMAP,
            [
                'verify' => false
            ],'Erro na requisiçao');
    }

    public function getHtmlSiteMap()
    {
        return $this->getRespostaMap()->getBody()->getContents();
    }

    public function getParser()
    {
        return new FilterParser($this->getHtmlSiteMap());
    }
}