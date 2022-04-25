<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Orders extends Component
{
    public $selectedCategory =null;
    public $selectedProduct =null;
    public $products =null;
    public function render()
    {
        
        $categories =Category::all();
        $allproducts =Product::all();
        return view('livewire.orders',compact('categories','allproducts'));
    }
    public function updatedSelectedCategory($category_id){
        $this->products = Product::where('category_id',$category_id)->get();
    }
    
}
