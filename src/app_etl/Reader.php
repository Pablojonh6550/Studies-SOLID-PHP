<?php

namespace App;

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

    $type_file = explode(".", $this->file);
    $path = $this->dir . '/' . $this->file;

    $class = '\App\extractor\\' . ucfirst($type_file[1]);

    return call_user_func_array([new $class, 'readFile'], [$path]);
  }
}
