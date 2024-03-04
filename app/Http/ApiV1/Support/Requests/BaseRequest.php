<?php

namespace App\Http\ApiV1\Support\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
}
