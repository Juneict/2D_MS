<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table ='products';
    protected $fillable =['num','limit','total','category_id'];
    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
    public function categories(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
