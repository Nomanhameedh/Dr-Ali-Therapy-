<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TherapyPackage extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'therapy_category_id',
        'name',
        'description',
        'duration',
        'mode',
        'price'
    ];
   

    // Package → belongs to Category
    public function category()
    {
        return $this->belongsTo(TherapyCategory::class, 'therapy_category_id');
    }

    public function appointments()
{
    return $this->hasMany(Appointment::class);
}


public function booking()
{
    $packages = TherapyPackage::all();
    return view('booking', compact('packages'));
}


}
