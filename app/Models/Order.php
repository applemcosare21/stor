<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','order_price', 'order_date'];

    public function products() {
        return $this->hasMany(Order::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function list() {

        $orders = Order::orderByRaw('order_price')->get();
        $list = [];
        foreach ($orders as $order) {
            $list[$order->id] = $order->order_price;
        }
        return $list;
    }

}
