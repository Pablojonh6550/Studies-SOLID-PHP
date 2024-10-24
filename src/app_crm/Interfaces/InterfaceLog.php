<?php

namespace App\app_crm\Interfaces;

use App\app_crm\components\Log;

interface InterfaceLog
{
  public function registerLogs(Log $log);
}
