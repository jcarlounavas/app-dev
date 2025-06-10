<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserConfession extends Model
{
    //
    protected $table = 'user_confessions';
    protected $fillable = ['name', 'username', 'password'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;
}
