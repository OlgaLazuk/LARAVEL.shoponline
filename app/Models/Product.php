<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'price', 'description', 'active', 'photo', 'category_id'  ];



    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function getPagePhotoAttribute()
    {
        if (Storage::exists($this->attributes['photo'])) {
            return Storage::url($this->attributes['photo']);
        }
        return 'https://i.pinimg.com/564x/92/67/fe/9267febb0da13b73d37fcf8c5dfaea9d.jpg';
    }

}
