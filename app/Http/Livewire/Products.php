<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    public $products=[],$product_number;
    public $search;
    public function mount(){
        $this->products =Product::all();
    }
    public function searchProduct(){
        $this->product = Product::find($this->search);
        //  dd($this->product);
    }
    use WithPagination;
    public function render()
    {
        
        return view('livewire.products',['products'=>Product::paginate(10)]);
    }
}
