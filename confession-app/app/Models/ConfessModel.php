<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfessModel extends Model
{
    //
    protected $table = 'confessions';
    protected $fillable = ['name', 'confess'];
    public $timestamps = true;
}
