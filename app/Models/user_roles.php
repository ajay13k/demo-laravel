<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user_roles extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $guard = 'admin';
}
