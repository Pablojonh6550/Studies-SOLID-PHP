<?php

namespace App;

class File
{

    private $data = array();
    public function getData(): array
    {
        return $this->data;
    }
    public function setData(string $name, string $cpf, string $email): void
    {
        array_push($this->data, ['name' => iconv("iso-8859-1", "utf-8", $name), 'cpf' => $cpf, 'email' => $email]);
    }

    public function readFile(string $path, string $type): void
    {
        $handle = fopen($path, "r");

        if ($handle === false)
            throw new \RuntimeException("Não foi possível abrir o arquivo: $path");

        $type === 'csv' ? $this->readFileCsv($handle) : $this->readFileTxt($handle);

        fclose($handle);
    }

    private function readFileCsv($handle): void
    {
        if (!is_resource($handle))
            throw new \InvalidArgumentException('Esperado um recurso válido.');

        while (($line = fgetcsv($handle, 10000, ",")) !== false) {
            $this->setData($line[0], $line[1], $line[2]);
        }
    }
    private function readFileTxt($handle): void
    {
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
    }
}
