<div class="modal right fade" id="editcustomer{{$customer->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Edit customer</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $customer->id}}
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('customers.update',$customer->id)}}" method="POST">
                                         @csrf
                                        @method('put')
                                        <div class="form-group">
                                          <label for="">နာမည်</label>
                                          <input type="text" name="name" class="form-control" value="{{$customer->name}}"> 
                                        </div>
                                       <div class="form-group">
                                         <label for="">phone</label>
                                         <input type="text" name="phone" class="form-control"  value="{{$customer->phone}}"> 
                                       </div>
                                                                     
                                       <div class="modal-footer">
                                        <button class="btn btn-warning btn-block">Update</button>
                                       </div>
                                                   
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 