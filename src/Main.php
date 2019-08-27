<?php

namespace App;

use App\Model\Main as Item;

class Main
{
    protected $_item = Item::class;

    public function getName()
    {
        $item = new $this->_item;
        return $item->getName();
    }
}