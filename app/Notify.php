<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    public $table = 'notifies';
    public $fillable = ['email'];

}
