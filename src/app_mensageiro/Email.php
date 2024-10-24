<?php

namespace App\app_mensageiro;

use App\app_mensageiro\Interfaces\InterfaceMessageToken;

class Email implements InterfaceMessageToken
{
  public function send(): void
  {
    echo 'Email: seu token é 555-333';
  }
}
