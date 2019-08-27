<?php

use PHPUnit\Framework\TestCase;

use App\Main;
use App\Child;


class ATest extends TestCase
{
    public function testMainClass()
    {
        $item = new Main();
        $this->assertEquals('Main Class', $item->getName());
    }

    public function testChildClass()
    {
        $item = new Child();
        $this->assertEquals('Child Class', $item->getName());
    }
}
