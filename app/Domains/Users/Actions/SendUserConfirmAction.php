<?php

namespace App\Domains\Users\Actions;

use App\Domains\Users\Actions\UserConfirms\EmailUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\SmsUserConfirmApi;
use App\Domains\Users\Actions\UserConfirms\TelegramUserConfirmApi;
use App\Exceptions\EnumException;
use App\Http\ApiV1\Consts\UserNotificationEnums;

class SendUserConfirmAction
{
    public function __construct(
        protected SmsUserConfirmApi $smsUserConfirmApi,
        protected EmailUserConfirmApi $emailUserConfirmApi,
        protected TelegramUserConfirmApi $telegramUserConfirmApi
    ) {
    }

    /**
     * @throws EnumException
     */
    public function execute(array $validated): void
    {
        match($validated['type']) {
            UserNotificationEnums::SMS->value => $this->smsUserConfirmApi->sendConfirm($validated, UserNotificationEnums::SMS),
            UserNotificationEnums::EMAIL->value => $this->emailUserConfirmApi->sendConfirm($validated, UserNotificationEnums::EMAIL),
            UserNotificationEnums::TELEGRAM->value => $this->telegramUserConfirmApi->sendConfirm($validated, UserNotificationEnums::TELEGRAM),
            default => throw new EnumException('Does not find type confirm')
        };
    }
}
