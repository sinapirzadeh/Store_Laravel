<?php

namespace App\Models\Product;

use App\Models\buy\Item;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories\ProductsCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'name']];
    }
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    protected $fillable = [
        'product_id', 'category_id', 'name', 'slug', 'price', 'description', 'image', 'brand', 'stock'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->product_id = (string) Str::uuid();
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    // category
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductsCategory::class, 'category_id');
    }

    public function item(): HasMany

    {
        return $this->hasMany(Item::class, 'item_id');
    }

    // comment
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }


}
