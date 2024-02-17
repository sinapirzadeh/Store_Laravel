<?php

namespace App\Models\Categories;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class ProductsCategory extends Model
{
    use HasFactory;
    use Sluggable;
    
    public function sluggable(): array
    {
        return ['slug' => ['source' => 'title']];
    }

    protected $table = 'products_category';
    protected $primaryKey = 'category_id';
    protected $keyType = 'string';
    protected $fillable = ['category_id', 'title', 'slug', 'parent_id', 'description', 'image'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->category_id = (string) Str::uuid();
        });
    }



    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    public function childCategory(): HasMany
    {
        return $this->hasMany(ProductsCategory::class, 'parent_id');
    }


    // Product
    public function producs(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
