<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ["deleted_at"];

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

    /**
     * Get the user that owns the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Categories::class, "category_id");
    }

    /**
     * Get all of the comments for the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    /**
     * The roles that belong to the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Orders::class, 'product_orders', 'id_product', 'id_order');
    }

    /**
     * The roles that belong to the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'product_carts', 'id_product', 'id_cart');
    }
}
