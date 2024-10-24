<?php
require __DIR__ . "../../vendor/autoload.php";

use App\app_mensageiro\Message;

use App\app_mensageiro\Email;
use App\app_mensageiro\Sms;

$message = new Message(new Email());
$message->sendToken();
echo '<br />';
$message2 = new Message(new Sms());
$message2->sendToken();
