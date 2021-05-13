<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesEnquiry extends Model
{
    public $table = 'sales_enquiry';  
    public $fillable = ['name','email','phone','enquiry'];
}
