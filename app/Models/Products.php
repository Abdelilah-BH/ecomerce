<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'category_id',
        'price',
        'discount',
        'stock',
        'tag',
        'brand',
        'model',
        'storage',
        'type_disque_dur',
        'graphics',
        'weight',
        'status',
        'hidden',
        'description',
        'images',
    ];
}
