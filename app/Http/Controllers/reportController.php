<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
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
      $datas =Order::where('period','morning')->whereDate('created_at',Carbon::today())->paginate(30);
      $datatwos =Order::where('period','evening')->whereDate('created_at',Carbon::today())->paginate(30);
      $customers=Order::select('customer_id',DB::raw('sum(price) as total_price'))->where('period','morning')->whereDate('created_at',Carbon::today())->groupBy('orders.customer_id')->get();
      $eveningcustomers=Order::select('customer_id',DB::raw('sum(price) as total_price'))->where('period','evening')->whereDate('created_at',Carbon::today())->groupBy('orders.customer_id')->get();
        return view('reports.index',compact('datas','orders','total','evening_orders','evening_total','datatwos','customers','eveningcustomers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
