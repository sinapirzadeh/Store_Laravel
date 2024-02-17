<?php

namespace App\Models\buy;

use App\Models\Product\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Cart extends Model
{
    use HasFactory;


    protected $keyType = 'string';

    protected $table = 'cart';
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'cart_id',
        'id'
    ];


    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->cart_id = (string) Str::uuid();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }


    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'item_id');
    }
}
