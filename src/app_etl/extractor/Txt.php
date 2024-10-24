<?php

namespace App\extractor;

class Txt extends File
{
  public function readFile($path): array
  {
    $handle = fopen($path, "r");

    if (!is_resource($handle))
      throw new \InvalidArgumentException('Esperado um recurso válido.');

    while (!feof($handle)) {
      $line = fgets($handle);
      $this->setData(
        substr($line, 11, 30),
        substr($line, 0, 11),
        substr($line, 41, 50),

      );
    }
    return $this->getData();
  }
}
