<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Service::class , 'service_id' , 'id');
    }
    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
