<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'sku',
        'price',
        'stock',
        'status'
    ];

    // Relationships
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'product_collection');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
