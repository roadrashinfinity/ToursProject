<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payment';
    protected $fillable=['user_id','card_no','cardholder_name','expiry_date','cvv'];
   
}
