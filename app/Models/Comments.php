<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $fillable = [
        "message",
        "id_user",
        "id_product",
        "like",
        "dislike",
    ];

    /**
     * Get the user that owns the Comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Products::class, "id_product");
    }

    /**
     * Get the user that owns the Comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    use HasFactory;
}
