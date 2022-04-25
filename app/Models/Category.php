<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    protected $fillable =['cat_name'];
    public function order(){
        return $this->hasMany('App\Models\Order');
    }
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
