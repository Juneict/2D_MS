<form action="{{route('addLimit')}}">
    @csrf
    <div class="form-group mt-3">
         <label for="limit">
         <input type="text" name="eveninglimit" class="form-control price" placeholder="limit amount ရိုတ်ထည့်ရန်"> 
        </label>
        <button class="btn btn-dark">စစ်မည်</button>
    </div>
   
</form>
                                         <!-- morning data start -->
                                        <div class="row">
                                            <div class="col-md-2">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($evening_orders->slice(0,20) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}-{{ $eveninglimit}} </span> 
                                                                    </td>
                                                                    <td>{{$order->total_price - $eveninglimit}}</td>
                                                                </tr>      
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-2">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($evening_orders->slice(20,20) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}-{{ $eveninglimit}} </span> 
                                                                    </td>
                                                                    <td>{{$order->total_price - $eveninglimit}}</td>
                                                                </tr>      
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-2">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($evening_orders->slice(40,20) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}-{{ $eveninglimit}} </span> 
                                                                    </td>
                                                                    <td>{{$order->total_price - $eveninglimit}}</td>
                                                                </tr>      
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-2">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($evening_orders->slice(60,20) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}-{{ $eveninglimit}} </span> 
                                                                    </td>
                                                                    <td>{{$order->total_price - $eveninglimit}}</td>
                                                                </tr>      
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-2">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($evening_orders->slice(80,20) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}-{{ $eveninglimit}} </span> 
                                                                    </td>
                                                                    <td>{{$order->total_price - $eveninglimit}}</td>
                                                                </tr>      
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>