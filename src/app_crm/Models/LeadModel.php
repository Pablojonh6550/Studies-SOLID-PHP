<?php

namespace App\app_crm\Models;

use App\app_crm\components\{Log, Notification};
use App\app_crm\DB;
use App\app_crm\Interfaces\{InterfaceRegister, InterfaceNotification};

class LeadModel extends DB implements InterfaceRegister, InterfaceNotification
{
  public function save() {}

  public function sendNotification(Notification $notification) {}
}
