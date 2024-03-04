<?php

use App\Http\ApiV1\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('user:send-confirm', [UserController::class, 'sendConfirm']);
Route::patch('user/setting', [UserController::class, 'bindUserSettings']);
