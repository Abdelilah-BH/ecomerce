<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_product",
        "id_commande",
        "quantity",
        "price",
        "discount"
    ];
}
