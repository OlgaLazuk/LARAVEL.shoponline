<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'category_id' ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

//    public function getRouteKeyName()
//    {
//        return 'name';
//    }
    public function getPagePhotoAttribute()
    {
        if (Storage::exists($this->attributes['photo'])) {
            return Storage::url($this->attributes['photo']);
        }
        return 'https://teploelement.ru/images/not_found.jpg';
    }

}
