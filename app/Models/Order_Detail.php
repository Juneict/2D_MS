<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table ='order_details';
    protected $fillable =['product_id','price'];
    public function orders()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }
    public function products(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
