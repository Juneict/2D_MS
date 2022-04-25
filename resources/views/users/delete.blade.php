<div class="modal right fade" id="deleteUser{{$user->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Delete User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $user->id}}
                                        </div>
                                        <div class="modal-body">
                                                <form action="{{ route('users.destroy',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <p> {{ $user->name }} ကို ဖျက်ရန်သေချာပါသလား ?</p>
                                                
                                                    <div class="modal-footer">
                                                        <button class="btn btn-default" data-dismiss="modal">Cancle</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 