<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;



class Account extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    protected $fillable=['username','email','password','password_confirmation'];
}
