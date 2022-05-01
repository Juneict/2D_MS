<div class="row">
    <div class="col-md-8 m-auto">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ဝယ်သူ</th>
                        <th>နံပါတ်</th>
                        <th>ကြေး</th>
                        <th>လုပ်ဆောင်ချက်များ</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($datatwos as $data)
                        <tr>
                                                            
                                                                    
                            <td>{{$data->customers->name}}</td>
                            <td>{{$data->product_id}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                                    <div class="btn-group">
                                                        <a href="" data-toggle="modal" data-target="#editData{{$data->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> ပြင်ရန်</a>
                                                        <a href="" data-toggle="modal" data-target="#deleteData{{$data->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> ဖျက်ရန်</a>
                                                    </div>
                                </td>                          
                         </tr>

                         <!-- editmodel -->
<div class="modal right fade" id="editData{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Edit User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $data->id}}
                                        </div>
                                        <div class="modal-body">
                                                <form action="{{ route('orders.update',$data->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="">နံပါတ်</label>
                                                        <input type="text" name="product_id" class="form-control" value="{{ $data->product_id }}"> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">ကြေး</label>
                                                        <input type="integer" name="price" class="form-control" value="{{ $data->price }}"> 
                                                    </div>                                              
                                                    <div class="modal-footer">
                                                        <button class="btn btn-warning btn-block">Update</button>
                                                    </div>
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
</div> 
                        <!-- endeditmodel -->

                        <!-- deletemodel -->
                        <div class="modal right fade" id="deleteData{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Delete User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $data->id}}
                                        </div>
                                        <div class="modal-body">
                                                <form action="{{ route('orders.destroy',$data->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <p> {{ $data->product_id }} ကို ဖျက်ရန်သေချာပါသလား ?</p>
                                                
                                                    <div class="modal-footer">
                                                        <button class="btn btn-default" data-dismiss="modal">Cancle</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 
                        <!-- enddeletemodel -->
                    @endforeach
                </tbody>
                {{$datatwos->links()}} 
        </table>
        <div class="card-header"> <h4>စုစုပေါင်း {{$evening_total->sum('price')}}</h4>
                
        </div>
    </div>
                                            
</div>
