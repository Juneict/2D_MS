<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use MyanLottery\Lottery\Twod;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       $total =Order::select('price')->where('period','morning')->whereDate('created_at', Carbon::today())->get();
       $evening_total =Order::select('price')->where('period','evening')->whereDate('created_at', Carbon::today())->get();
       $orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','morning')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
       $evening_orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','evening')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
       $products = Product::all();  
       $customers = Customer::all();
       $categories =Category::all();

        return view('orders.index',compact('products','orders','customers','total','evening_orders','evening_total','categories'));
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
      
        $data=array();
        for($i =0;$i<count($request->product_id);$i++){
            $tmp =[
                'customer_id'=>$request->customer_id,
                'product_id'=>$request->product_id[$i],
                'period'=>$request->period,
                'price'=>$request->price[$i],
            ];
            array_push($data,$tmp);
         }
         $orders =Order::insert($data);
    
      return redirect()->back()->with('Success','Orders created successfully');
       
        
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function orderlist(){
    
        $orders = Order::all();
        
        return view('orders.orderlist',compact('orders'));
    }
    public function reverse_string() {
        $rnumber = new Twod();
        return $rnumber->reverse_string(32);
    }
   
}
