<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';
    protected $primaryKey = 'comment_id';
    protected $keyType = 'string';
    protected $fillable = ['comment_id', 'product_id', 'name', 'subject', 'comment', 'star_rating'];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->comment_id = (string) Str::uuid();
        });
    }

    public function getRouteKeyName(): string
    {
        return 'comment_id';
    }


    // product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
