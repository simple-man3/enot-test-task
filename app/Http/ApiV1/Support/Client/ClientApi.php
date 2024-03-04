<?php

namespace App\Http\ApiV1\Support\Client;

use App\Http\ApiV1\Consts\UserNotificationEnums;
use GuzzleHttp\ClientInterface;

abstract class ClientApi
{
    private array $request = [];

    public function __construct(
        protected ClientInterface $client
    ) {
    }

    protected function makeRequest(array $fields): void
    {
        $this->request = [
            //...
        ];
    }

    public function send(): void
    {
        //...
    }

    public function sendConfirm(array $fields, UserNotificationEnums $userNotificationEnums): void
    {
        $this->send();
    }
}
