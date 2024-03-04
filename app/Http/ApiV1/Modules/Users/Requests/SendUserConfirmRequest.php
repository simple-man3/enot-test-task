<?php

namespace App\Http\ApiV1\Modules\Users\Requests;

use App\Http\ApiV1\Consts\UserNotificationEnums;
use App\Http\ApiV1\Support\Requests\BaseRequest;
use Illuminate\Validation\Rule;

class SendUserConfirmRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'type' => ['request', Rule::enum(UserNotificationEnums::class)],
            // ...
        ];
    }
}
