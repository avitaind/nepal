<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewServiceCenter extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['address', 'city', 'state', 'pin', 'opening_hour', 'phone', 'email'];
}
