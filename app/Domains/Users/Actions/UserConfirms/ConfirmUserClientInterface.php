<?php

namespace App\Domains\Users\Actions\UserConfirms;

use App\Http\ApiV1\Consts\UserNotificationEnums;

interface ConfirmUserClientInterface
{
    public function sendConfirm(array $fields, UserNotificationEnums $userNotificationEnums): void;
}
