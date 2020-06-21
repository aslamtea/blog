<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Akses extends Model
{
    protected $table = 'akses_id';
    protected  $fillable = ['menu_id', 'role_id'];
}
