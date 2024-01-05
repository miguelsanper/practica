<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filliable = ['name', 'barcode', 'cost', 'price', 'stock', 'alerts', 'image', 'category_id'];

}
