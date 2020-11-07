<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin_Login extends Authenticatable
{
    protected $table = 'administrator';
}
