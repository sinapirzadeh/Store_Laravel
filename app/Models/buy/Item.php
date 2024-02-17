<?php

namespace App\Models\buy;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $keyType = 'string';
    protected $primaryKey = 'item_id';
    protected $fillable = [
        'item_id',
        'product_id',
        'cart_id',
        'count'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->item_id = (string) Str::uuid();
        });
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    // cart
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

}
