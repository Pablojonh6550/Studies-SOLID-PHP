<?php

namespace App\app_mensageiro;

use App\app_mensageiro\Email;

use App\app_mensageiro\Interfaces\InterfaceMessageToken;

class Message
{

  private $channel;

  public function __construct(InterfaceMessageToken $channel)
  {
    $this->setChannel($channel);
  }

  public function getChannel(): InterfaceMessageToken
  {
    return $this->channel;
  }

  public function setChannel(InterfaceMessageToken $channel): void
  {
    $this->channel = $channel;
  }

  public function sendToken(): void
  {
    $this->getChannel()->send();
  }
}
