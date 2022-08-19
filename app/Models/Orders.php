<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        "id_delivery",
        "id_user",
        "tracking",
        "price",
        "status",
        "date_delivery"
    ];
    use HasFactory;

    /**
     * The roles that belong to the Orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_orders', 'id_order', 'id_product');
    }
}
