<?php

namespace App;

class EmailService
{
    // attributes
    private $de;
    private $from;
    private $subject;
    private $content;

    public function __construct(
        string $de = 'pablojonh6550@gmail.com.br',
        string $from = '',
        string $subject = '',
        string $content = '',
    ) {

        $this->de = $de;
        $this->from = $from;
        $this->subject = $subject;
        $this->content = $content;
    }

    public static function triggerEmail(): string
    {
        return "--- Enviar e-mail ---";
    }
}
