<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table='packages';
    protected $fillable=['package_name','package_type','package_location','package_price','package_features','package_details','package_image'];
    
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
