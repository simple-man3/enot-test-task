<?php

namespace App\Domains\Users\Actions;

use App\Domains\Users\Actions\UserConfirms\EmailUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\SmsUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\TelegramUserConfirmApi;
use App\Exceptions\EnumException;
use App\Http\ApiV1\Consts\UserNotificationEnums;

class SendUserConfirmAction
{
    /**
     * @throws EnumException
     */
    public function execute(array $validated): void
    {
        match($validated['type']) {
            UserNotificationEnums::SMS->value => resolve(SmsUserConfirmApi::class)->sendConfirm($validated, UserNotificationEnums::SMS),
            UserNotificationEnums::EMAIL->value => resolve(EmailUserConfirmApi::class)->sendConfirm($validated, UserNotificationEnums::EMAIL),
            UserNotificationEnums::TELEGRAM->value => resolve(TelegramUserConfirmApi::class)->sendConfirm($validated, UserNotificationEnums::TELEGRAM),
            default => throw new EnumException('Does not find type confirm')
        };
    }
}
