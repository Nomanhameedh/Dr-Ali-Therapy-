<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name', 'email', 'therapy_package_id', 'appointment_date'
    ];

    // Relationship with TherapyPackage
    public function therapyPackage()
    {
        return $this->belongsTo(TherapyPackage::class, 'therapy_package_id');
    }
}
