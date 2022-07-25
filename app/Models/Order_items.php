<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;
    protected $fillable =[
        'order_id',
        'product_id',
        'product_name',
        'product_price',
        'product_image',
        'product_quantity',
        'order_date',
    ];
}
