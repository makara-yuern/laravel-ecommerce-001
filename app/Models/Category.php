<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
    // Recursive helper to get categories as a nested array for dropdowns
    public static function getNestedCategories($categories = null, $parentId = null, $prefix = '')
    {
        $categories = $categories ?: Category::all();
        $result = [];
        foreach ($categories->where('parent_id', $parentId) as $category) {
            $result[] = [
                'id' => $category->id,
                'name' => $prefix . $category->name
            ];
            $result = array_merge($result, self::getNestedCategories($categories, $category->id, $prefix . '— '));
        }
        return $result;
    }
}
