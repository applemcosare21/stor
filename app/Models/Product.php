<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','product_name', 'product_brand'];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public static function list() {

        $products = Product::orderByRaw('product_name')->get();
        $list = [];
        foreach ($products as $product) {
            $list[$product->id] = $product->product_name;
        }
        return $list;
    }


}
