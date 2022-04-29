@extends('layouts.app')

@section('content')


<style>
    .modal.right .modal-dialog{
        
        top:0;
        right: 0;
        margin-right:20vh;
    }
    .modal.fade:not(.in).right .modal-dialog{
        -webkit-transform:translate3d(25%,0,0);
        transform:translate3d(25%,0,0);
    }
    
</style>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
               <div class="col-md-4">
                   <div class="card">
                        <div class="card-header">
                                <h4 style="float:left">စာရင်းထည့်ရန်</h4>                           
                        </div>
                   
                   
                         <div class="card-body">
                                <form action="{{ route('orders.store')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group mt-3 col-md-4">
                                                    <select name="period"  class="form-control" required>
                                                        <option value="" class="form-control">အချိန်ရွေးရန် *</option>
                                                        
                                                        <option value="morning" class="form-control">မနက်</option>
                                                        <option value="evening" class="form-control">ညနေ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3     col-md-8">
                                                    <select name="customer_id"  class="form-control" required>
                                                        <option value="" class="form-control">ဝယ်သူရွေးရန် *</option>
                                                        @foreach( $customers as $customer)
                                                                <option value="{{ $customer->id }}" class="form-control">
                                                                {{ $customer->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                        @livewire('orders')
                                                                    
                                            
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="col-md-8">
                      
                            
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">မနက်</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ညနေ</button>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                </div>
                    <!-- morning data end -->
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-header">စုစုပေါင်း {{$evening_total->sum('price')}}</div>
                    <!-- evening data start -->
                                    <div class="row">
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(0,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(10,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(20,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(30,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(40,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(50,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(60,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(70,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(80,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                        <div class="col-md-1">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($evening_orders->slice(90,10) as $evening_order)
                                                            <tr>
                                                                <td>
                                                                {{$evening_order->product_id}}  
                                                                </td>
                                                                <td>
                                                                <span class="badge badge-success">{{$evening_order->total_price}}</span> 
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                    <!-- evening data end -->
                                </div>
                            </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>   
@endsection

@section('script')
<script>
    
       $('.add_more').on('click',function(e){
                e.preventDefault();
                var product =$('.product_id').html();
                var numberofrow =($('.addMoreProduct tr').length - 0) + 1;
                var tr = '<tr><td class="no">'+ numberofrow  + '</td>'+
                              '<td><input type="text" class="form-control product_id" name="product_id[]">'+product+'</input></td>'+
                              '<td><input type="number" name="price[]" class="form-control price"></td>'+
                             '<td><a href="" class="btn btn-sm btn-danger delete"><i class="fas fa-times"></i></a></td>'
                 $('.addMoreProduct').append(tr);
            });
      $('.addMoreProduct').delegate('.delete','click',function(e){
                e.preventDefault();
               $(this).parent().parent().remove();
           })
$(function() {
  
  $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
    localStorage.setItem('lastTab', $(this).attr('href'));
  });
  var lastTab = localStorage.getItem('lastTab');
  
  if (lastTab) {
    $('[href="' + lastTab + '"]').tab('show');
  }
  
});
</script>
@endsection