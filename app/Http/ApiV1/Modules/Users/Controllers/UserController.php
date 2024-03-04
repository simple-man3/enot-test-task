<?php

namespace App\Http\ApiV1\Modules\Users\Controllers;

use App\Domains\Users\Actions\BingUserSettingsAction;
use App\Domains\Users\Actions\SendUserConfirmAction;
use App\Http\ApiV1\Modules\Users\Requests\PatchUserSettingRequest;
use App\Http\ApiV1\Modules\Users\Requests\SendUserConfirmRequest;
use App\Http\ApiV1\Modules\Users\Resources\UsersResource;
use App\Http\ApiV1\Support\Resources\EmptyResource;

class UserController
{
    public function sendConfirm(SendUserConfirmRequest $request, SendUserConfirmAction $action): EmptyResource
    {
        $action->execute($request->validated());

        return new EmptyResource();
    }

    public function bindUserSettings(PatchUserSettingRequest $request, BingUserSettingsAction $action): UsersResource
    {
        return new UsersResource($action->execute($request->validated()));
    }
}
