<div class="modal right fade" id="addprice{{$customer->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">ကြေးထည့်ရန်</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $customer->id}}
                                        </div>
                                        <div class="modal-body">
                                        <form action="/customers/{{$customer->id}}/addPrice" method="GET">
                                         @csrf
                                      
                                        <div class="form-group">
                                          <label for="">နံပါတ်</label>
                                          <input type="text" name="num" class="form-control" value="{{$customer->name}}"> 
                                        </div>
                                       <div class="form-group">
                                         <label for="">ကန့်သက်ချက်</label>
                                         <input type="text" name="limit" class="form-control"  value="{{$customer->phone}}"> 
                                       </div>
                                       <div class="form-group">
                                         <label for="">ကြေး</label>
                                         <input type="text" name="total" class="form-control"  value=""> 
                                       </div>
                                                                     
                                       <div class="modal-footer">
                                        <button class="btn btn-warning btn-block">Update</button>
                                       </div>
                                                   
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                        </div> 