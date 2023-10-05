<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'user_id',


    ];

    public function carts()
    {
        return $this->hasMany(Carts::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
