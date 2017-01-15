<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roboUsers extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'business_name', 'industry', 'referred_by'];
}
