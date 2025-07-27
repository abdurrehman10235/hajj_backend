<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAr extends Model
{
    use HasFactory;

    protected $table = 'services_ar';
    
    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'description',
        'image_url',
        'price',
        'gps_latitude',
        'gps_longitude',
        'phone_number',
        'contact_type'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'gps_latitude' => 'decimal:8',
        'gps_longitude' => 'decimal:8',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
