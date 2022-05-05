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
        //total price for morining//
       $total =Order::select('price')->where('period','morning')->whereDate('created_at', Carbon::today())->get();
       //total price for evening//
       $evening_total =Order::select('price')->where('period','evening')->whereDate('created_at', Carbon::today())->get();
       //ordernumbers for morining//
       $orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','morning')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
       //ordernumbers for evening//
       $evening_orders=Order::select('product_id',DB::raw('sum(price) as total_price'))->where('period','evening')->whereDate('created_at',Carbon::today())->groupBy('orders.product_id')->get();
     
       $customers = Customer::all();

        return view('orders.index',compact('orders','customers','total','evening_orders','evening_total'));
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
        $orderController = new OrderController();
        $twod = new Twod();

        $alphas = range('A', 'Z');

        $obj = (Object)[];
        $obj->period = $request->period;
        $obj->customer_id = $request->customer_id;
        $obj->total_products = [];
        $obj->total_prices = [];

        $products = $specific_prices = array();
        for($i = 0; $i < count($request->product_id); $i++){
            $product_id = strtoupper($request->product_id[$i]);

            preg_match_all("/[A-Z]+|\d+|[#$%^&*()+=\-\[\]\';,.\/{}|:<>?~]+/", $product_id, $matches_arr);
            $matches = $matches_arr[0];

            switch($matches){

                // Round - Reverse
                case in_array('R', $matches) == TRUE:
                    $reversed_prod = $twod->reverse_string($matches[0])->getData()->data;
                    $products = [$matches[0], $reversed_prod];
                    break;

                // Brake
                case in_array('B', $matches) == TRUE:
                    $products = $twod->break($matches[0])->getData()->data;
                    break;

                // Brake Round
                case in_array('E', $matches) == TRUE:
                    $products = $twod->break_round($matches[0])->getData()->data;
                    break;

                // Power
                case in_array('W', $matches) == TRUE:
                    $products = $twod->power()->getData()->data;
                    break;

                // NatKhat
                case in_array('N', $matches) == TRUE:
                    $products = $twod->natkhat()->getData()->data;
                    break;

                // NyiKo
                case in_array('X', $matches) == TRUE:
                    $products = $twod->nyiko()->getData()->data;
                    break;

                // Apuu
                case in_array('A', $matches) == TRUE:
                    $products = $twod->apuu()->getData()->data;
                    break;

                // Salpyae
                case in_array('S', $matches) == TRUE:
                    $products = $twod->salpyae()->getData()->data;
                    break;

                // Htate See
                case in_array('F', $matches) == TRUE:
                    $products = $twod->htatesee($matches[0])->getData()->data;
                    break;

                // Nauk Pate
                case in_array('P', $matches) == TRUE:
                    $products = $twod->naukpate($matches[0])->getData()->data;
                    break;

                // Even
                case in_array('++', $matches) == TRUE:
                    $products = $twod->even()->getData()->data;
                    break;

                // Odd
                case in_array('--', $matches) == TRUE:
                    $products = $twod->odd()->getData()->data;
                    break;

                // Even Odd
                case in_array('+-', $matches) == TRUE:
                    $products = $twod->evenodd()->getData()->data;
                    break;

                // Odd Even 
                case in_array('-+', $matches) == TRUE:
                    $products = $twod->oddeven()->getData()->data;
                    break;

                // Numbers
                case count($matches) == 1 && in_array($matches[0], $alphas) == FALSE:
                    $products = [$request->product_id[$i]];
                    break;

                // Ignore Case
                default:
                    $products = null;
            }

            if(is_null($products)){
                continue;
            }

            $specific_prices = array_fill(0, count($products), $request->price[$i]);
            $obj->total_products = array_merge($obj->total_products, $products);
            $obj->total_prices = array_merge($obj->total_prices, $specific_prices);
        }

        $res = $orderController->insertDB($obj);
        return redirect()->back()->with('Success','Orders created successfully');
    }

    function insertDB($obj){

        $data=array();
        for($i =0;$i<count($obj->total_products);$i++){
            $tmp =[
                'customer_id'=>$obj->customer_id,
                'product_id'=>$obj->total_products[$i],
                'period'=>$obj->period,
                'price'=>$obj->total_prices[$i],
            ];
            array_push($data,$tmp);
         }
         $orders =Order::insert($data);
         return $orders;
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
        $orders = Order::find($id);
        $orders->update($request->all());
        return back()->with('Success',"User updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return back()->with('error',"Order deleted successfully");
    }
    public function deletetable(){
       
        // $orders = Order::all();
        DB::table('orders')->truncate();
        return redirect()->back()->with('Success','Orders deleted successfully');
    }
     
   
}
