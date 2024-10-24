<?php

namespace App\app_poligonos;

class Polygons
{
  private $form;

  public function getForm(): object
  {
    return $this->form;
  }

  public function setForm(object $form): void
  {
    $this->form = $form;
  }

  public function getArea()
  {
    return $this->getForm()->getWidth() * $this->getForm()->getHeight();
  }
}
