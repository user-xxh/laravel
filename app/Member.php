<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    public $timestamps = false;
    protected $fillable = ['id' , 'name', 'age', 'email'];
}
