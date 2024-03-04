<?php

namespace App\Http\ApiV1\Modules\Users\Resources;

use App\Domains\Users\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User */
class UsersResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            // ...
        ];
    }
}
