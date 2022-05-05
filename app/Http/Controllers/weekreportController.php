<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class weekreportController extends Controller
{
    
    public function index(){
        $datas = Order::select('customer_id',DB::raw('sum(price) as total_price','created_at'))->where('period','morning')->groupBy('customer_id')->get();
        $datastwo = Order::select('customer_id',DB::raw('sum(price) as total_price','created_at'))->where('period','evening')->groupBy('customer_id')->get();
        return view('weekreports.index',compact('datas','datastwo'));
    }
}
