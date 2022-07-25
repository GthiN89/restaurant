<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable =[
        'categories_id',
        'name',
        'description',
        'price',
        'sale_price',
        'quantity',
        'image',
    ];

    public function categories() {
        return $this->belongsTo(Categories::class);
    }
}
