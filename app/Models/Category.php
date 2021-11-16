<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

//    public function getCatPhotoAttribute()
//    {
//        if (Storage::exists($this->attributes['photo'])) {
//            return Storage::url($this->attributes['photo']);
//        }
//        return 'https://i.pinimg.com/originals/d8/a6/e9/d8a6e900ec95fb797c0bc55cb4b86f27.jpg';
//    }


}
