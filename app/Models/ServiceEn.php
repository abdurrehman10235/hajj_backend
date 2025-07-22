<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEn extends Model
{
    use HasFactory;

    protected $table = 'services_en';
    
    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'description',
        'image_url',
        'price'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
