<?php

namespace App\app_mensageiro;

use App\app_mensageiro\Interfaces\InterfaceMessageToken;

class Sms implements InterfaceMessageToken
{
  public function send(): void
  {
    echo 'Sms: seu token é 888-333';
  }
}
