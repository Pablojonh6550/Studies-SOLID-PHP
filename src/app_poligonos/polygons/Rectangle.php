<?php

namespace App\app_poligonos\polygons;

class Rectangle
{

    protected $width;
    protected $height;

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }
    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }
}
