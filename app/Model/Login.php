<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use Notifiable;

    protected $guard = 'staff';
    protected $table = 'staff';
    protected $primaryKey = "staff_id";
    protected $rememberTokenName = false;

}

