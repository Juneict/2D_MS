<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use MyanLottery\Lottery\Twod;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        $categories =Category::all();
        return view('Products.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $products = new Product();
        $products->num = $request->num;
        $products->limit =$request->limit;
        $product->category_id =$request->category_id;
        $products->save();
        if($products){
            return redirect()->back()->with('Success','Products created successfully');
        }else{
            return redirect()->back()->with('Error','Products fail created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$products)
    {
        $products = Product::find($products);
       
            $products->num =$request->num;
            $products->limit =$request->limit;
            $products->category_id =$request->category_id;
       
        $products->save();
        if($products){
            return redirect()->back()->with('Success','Products updates successfully');
        }else{
            return redirect()->back()->with('Error','Products fail update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('Error','Product Deleted Successfully');
    }
    public function addPrice(Request $request,$products){
        
        
        $products = Product::find($products);
        
        $products->total=$products->total+$request->total;
        $products->save();
        return redirect()->back()->with('Success','Price updates successfully');
    }
}
