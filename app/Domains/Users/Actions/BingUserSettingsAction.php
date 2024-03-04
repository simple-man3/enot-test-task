<?php

namespace App\Domains\Users\Actions;

use App\Domains\Users\Models\User;

class BingUserSettingsAction
{
    public function execute(array $fields): User
    {
        // ...
        return new User();
    }
}
