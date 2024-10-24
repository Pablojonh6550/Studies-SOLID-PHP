<?php

namespace App\app_crm\Interfaces;

use App\app_crm\components\Notification;

interface InterfaceNotification
{
  public function sendNotification(Notification $notification);
}
