<div class="modal right fade" id="editproduct{{$product->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Edit product</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $product->id}}
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('products.update',$product->id)}}" method="POST">
                                         @csrf
                                        @method('put')
                                        <div class="form-group">
                                          <label for="">နံပါတ်</label>
                                          <input type="text" name="num" class="form-control" value="{{$product->num}}"> 
                                        </div>
                                       <div class="form-group">
                                         <label for="">ကန့်သက်ချက်</label>
                                         <input type="text" name="limit" class="form-control"  value="{{$product->limit}}"> 
                                       </div>
                                                                     
                                       <div class="modal-footer">
                                        <button class="btn btn-warning btn-block">Update</button>
                                       </div>
                                                   
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 