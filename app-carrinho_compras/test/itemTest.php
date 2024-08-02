<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{
    public function testItemInstantiated()
    {
        $item = new Item();

        // checked attributes
        $this->assertEquals("", $item->getName());
        $this->assertEquals(0, $item->getValue());
    }

    public function testGetAndSetItemName()
    {
        $item = new Item();
        $name = "Copo de vidro";
        $item->setName($name);
        $this->assertEquals($name, $item->getName());
    }
    public function testGetAndSetItemValue()
    {
        $item = new Item();
        $value = 35.90;
        $item->setValue($value);
        $this->assertEquals($value, $item->getValue());
    }
}
