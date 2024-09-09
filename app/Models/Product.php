<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được điền
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
