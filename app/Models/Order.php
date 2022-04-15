<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $table ='orders';
    protected $fillable =['customer_id','period','product_id','price'];
    public function order_detail(){
        return $this->hasMany('App\Models\Order_Detail');
    }
    public function products(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function customers(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
}
