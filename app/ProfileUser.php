<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class ProfileUser extends Model
{
    protected $table = 'profile_user';

    protected $fillable = [
        'id'
    ];
}
