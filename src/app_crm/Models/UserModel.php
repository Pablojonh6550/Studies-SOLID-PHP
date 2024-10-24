<?php

namespace App\app_crm\Models;

use App\app_crm\components\{Log, Notification};
use App\app_crm\DB;
use App\app_crm\Interfaces\{InterfaceRegister, InterfaceLog, InterfaceNotification};

class UserModel extends DB implements InterfaceRegister, InterfaceLog, InterfaceNotification
{
  public function save() {}
  public function RegisterLogs(Log $log) {}

  public function sendNotification(Notification $notification) {}
}
