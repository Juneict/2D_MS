<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class limitController extends Controller
{
    public function index(Request $request){
        $limit = $request->limit;
        $orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','morning')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
        //ordernumbers for evening//
        $evening_orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','evening')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
        return view('limit.index',compact('orders','evening_orders','limit'));
    }
    
}
