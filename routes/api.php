<?php

use App\Http\ApiV1\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('user:send-confirm', [UserController::class, 'sendConfirm'])->middleware(['auth']);
Route::patch('user/setting:from-token', [UserController::class, 'bindUserSettings'])->middleware(['verify.token']);
