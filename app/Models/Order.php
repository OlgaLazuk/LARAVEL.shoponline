<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'cart', 'city', 'address', 'phone', 'email', 'comment', 'updated_at', 'created_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
