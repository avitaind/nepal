<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewWhereToBuy extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','address', 'phone', 'city', 'state', 'pin'];
}
