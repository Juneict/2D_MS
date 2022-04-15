<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customers';
    protected $fillable =['name','phone'];
    public function order(){
        return $this->hasMany('App\Models\Order');
    }
}
