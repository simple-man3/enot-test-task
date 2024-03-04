<?php

namespace App\Http\ApiV1\Consts;

enum UserNotificationEnums: string
{
    case SMS = 'sms';
    case EMAIL = 'email';
    case TELEGRAM = 'telegram';
}
