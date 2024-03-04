<?php

namespace App\Domains\Users\Models;

/**
 * @property array $settings - набор настроек (см UserSetting.php)
 */
class User
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
