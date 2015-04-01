<?php

namespace ATC\TrelloTicketer\TrelloApi;

use Tebru\Retrofit\Adapter\RestAdapter;

final class TrelloAdapterProvider
{
    static public function create()
    {
        $builder = RestAdapter::builder();
        $builder = $builder->setBaseUrl('https://api.trello.com/1');

        return $builder->build();
    }
}
