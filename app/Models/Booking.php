<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = [
        'name',
        'email',
        'package_id',
        'booking_date',
    ];
    // Relationship with TherapyPackage
    public function therapyPackage()
{
    return $this->belongsTo(TherapyPackage::class, 'therapy_package_id');
}

}



