<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    protected $fillable = [
        "name",
        'id_user',
        'address',
        'zip',
        'city',
        'phone',
        'email',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    use HasFactory;
}
