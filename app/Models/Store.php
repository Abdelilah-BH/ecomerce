<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $fillable = [
        "name",
        "ice",
        "description",
        "email",
        "phone",
        "address",
        "city",
        "facebook",
        "instagram",
        "twitter",
        "longitude",
        "latitude",
    ];

    use HasFactory;
}
