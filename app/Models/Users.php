<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = "id";
    protected $table = "users";
    protected $fillable = ['email', 'password', 'name', 'no_phone', 'address', 'role', 'jabatan'];
    protected $hidden = ['password', 'remember_token'];
}