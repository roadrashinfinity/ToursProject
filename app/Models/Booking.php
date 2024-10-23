<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='booking';
    
    
    protected $fillable=['user_id','from','to','adults','children','email','phone','status'];
    
    public function packages()
    {
        return $this->belongsTo(Package::class);
    }
}

