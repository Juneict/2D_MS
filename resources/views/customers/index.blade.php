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
<div class="container">
        <div class="col-md-12">
            <div class="row">
               <div class="col-md-12 float-right">
                    <div class="card">
                         @if (session('Success'))
                        <div class="alert alert-success">
                            {{ session('Success') }}
                        </div>
                        @endif
                        @if (session('Error'))
                        <div class="alert alert-danger">
                            {{ session('Error') }}
                        </div>
                        @endif
                        <div class="card-header">
                                    <h4 style="float:left">ဝယ်သူများ</h4>
                                    <a href="" class="btn btn-dark" style="float:right" data-toggle="modal" data-target="#addproduct">
                                    <i class="fa fa-plus"></i>အသစ်ထည့်ရန်</a>
                        </div>
                        <div class="card-body">
                                <table id="data" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                
                                                    <th>အမည်</th>
                                                    <th>ဖုန်းနံပါတ်</th>
                                                    
                                                    <th>လုပ်ဆာင်ချက်များ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                    <tr>
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->phone}}</td>
                                                      
                                                       
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="" data-toggle="modal" data-target="#editcustomer{{$customer->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> ပြင်ရန်</a>
                                                                <a href="" data-toggle="modal" data-target="#deletecustomer{{$customer->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> ဖျက်ရန်</a>
                                                                <a href="" data-toggle="modal" data-target="#addprice{{$customer->id}}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> အသေးစိတ်ကြည့်ရန်</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal of add section -->
                                                    @include('customers.add')                 

                                                    <!-- Modal of edit section -->
                                                    @include('customers.edit')
                                                                
                                                    <!-- Modal of delete section -->
                                                    @include('customers.delete')
                                                    <!-- end modal section -->
                                                   
                                                @endforeach
                                               
                                            </tbody>
                                           
                                </table>
                                    
                        </div>
                          
                    </div>
                        @include('customers.create')
                        
                </div>
              
            </div>
        </div>
        
</div>


    


  
   
    
    


    

    

   
   

<script>
    
  $(function () {
    $('div.alert').delay(3000).slideUp(300);
  });
 
</script>     
@endsection