<?php

namespace App;

use App\File;

class Reader
{
  private $file;
  private $dir;

  public function __construct() {}

  public function getDir(): string
  {
    return $this->dir;
  }

  public function setDir(string $dir): void
  {
    $this->dir = $dir;
  }

  public function getFile(): string
  {
    return $this->file;
  }

  public function setFile(string $file): void
  {
    $this->file = $file;
  }

  public function read(): array
  {
    $path_file = new File();
    $type_file = explode(".", $this->file);
    $path_file->readFile($this->dir . '/' . $this->file, $type_file[1]);

    return $path_file->getData();
  }
}
