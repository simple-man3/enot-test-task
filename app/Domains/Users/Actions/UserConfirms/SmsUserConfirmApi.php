<?php

namespace App\Domains\Users\Actions\UserConfirms;

use App\Http\ApiV1\Consts\UserNotificationEnums;
use App\Http\ApiV1\Support\Client\ClientApi;
use GuzzleHttp\ClientInterface;

class SmsUserConfirmApi extends ClientApi implements ConfirmUserClientInterface
{
    public function __construct(ClientInterface $client)
    {
        parent::__construct($client);
    }

    public function sendConfirm(array $fields, UserNotificationEnums $userNotificationEnums): void
    {
        $this->makeRequest([...$fields, $userNotificationEnums->value]);
        $this->send();
    }
}
