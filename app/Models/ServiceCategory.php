<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name_en', 'name_ar'];

    public function servicesEn()
    {
        return $this->hasMany(ServiceEn::class, 'category_id');
    }

    public function servicesAr()
    {
        return $this->hasMany(ServiceAr::class, 'category_id');
    }
}
