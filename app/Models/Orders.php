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
}
