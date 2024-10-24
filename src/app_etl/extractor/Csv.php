<?php

namespace App\extractor;

class Csv extends File
{
  public function readFile($path): array
  {
    $handle = fopen($path, "r");

    if (!is_resource($handle))
      throw new \InvalidArgumentException('Esperado um recurso válido.');

    while (($line = fgetcsv($handle, 10000, ",")) !== false) {
      $this->setData($line[0], $line[1], $line[2]);
    }

    return $this->getData();
  }
}
