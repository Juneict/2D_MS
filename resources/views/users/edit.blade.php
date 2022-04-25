<div class="modal right fade" id="editUser{{$user->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Edit User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $user->id}}
                                        </div>
                                        <div class="modal-body">
                                                <form action="{{ route('users.update',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}"> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}"> 
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="password" name="password" class="form-control" value="{{ $user->password }} "  readonly> 
                                                    </div>
                                                
                                                    <div class="modal-footer">
                                                        <button class="btn btn-warning btn-block">Update</button>
                                                    </div>
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 