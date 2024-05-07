<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'description',
        'price',
        'image',
        'brand',
        'model',
        'year',
        'location',
        'rooms',
        'bathrooms',
        'type',
        'length',
        'capacity',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
