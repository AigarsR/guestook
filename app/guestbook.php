<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guestbook extends Model
{
    protected $fillable = ['username','email','website','message'];
}
