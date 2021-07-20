<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'cate_id',
        'image',
        'price',
        'quantity',
        'sort_desc',
        'detail'

    ];
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cate_id');
    }
}
