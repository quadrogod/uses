<?php

namespace App;

use App\Model\Child as Item;

class Child extends Main
{
    protected $_item = Item::class;
}