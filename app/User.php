<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'table_user';
    public $primaryKey = 'id_login';

    protected $fillable = ['nama_user', 'username', 'password',];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
