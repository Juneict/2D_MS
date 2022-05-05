<div class="card-header">စုစုပေါင်း {{$total->sum('price')}}</div>
                                         <!-- morning data start -->
                                        <div class="row">
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(0,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}} </span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(10,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(20,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(30,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(40,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(50,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(60,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(70,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(80,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="col-md-1">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($orders->slice(90,10) as $order)
                                                                <tr>
                                                                    <td>
                                                                    {{$order->product_id}}  
                                                                    </td>
                                                                    <td>
                                                                    <span class="badge badge-success">{{$order->total_price}}</span> 
                                                                    </td>
                                                                </tr>
                                                                
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>