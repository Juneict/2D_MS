 <!-- Modal section -->
 <div class="modal right fade" id="addproduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">နံပါတ် အသစ်ထည့်ရန်</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="{{ route('products.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">နံပါတ်</label>
                                        <input type="text" name="num" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">ကန့်သက်ချက်</label>
                                        <input type="text" name="limit" class="form-control"> 
                                    </div>
                                                             
                                    <div class="modal-footer">
                                        <button class="btn btn-dark btn-block">Save</button>
                                    </div>
                                </form>
                        </div>
                  
                    </div>
                </div>
    </div>  