<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'quantity', 'category_id', 'is_visible', 'cover_url'];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
