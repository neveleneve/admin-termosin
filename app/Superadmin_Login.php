<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Superadmin_Login extends Authenticatable
{
    protected $table = 'administrator';
}
