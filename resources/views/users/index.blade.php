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
               <div class="col-md-9">
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
                                <h4 style="float:left">အသုံးပြုသူများ</h4>
                                <a href="" class="btn btn-dark" style="float:right" data-toggle="modal" data-target="#addUser">
                                <i class="fa fa-plus"></i>အသစ်ထည့်ရန်</a></div>
                            <div class="card-body">
                                <table class="table table-bordered table-left">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>အမည်</th>
                                                <th>Email</th>
                                                
                                                <th>လုပ်ဆောင်ချက်များ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $key=>$user)
                                            <tr>
                                                <td>{{$key+1 }}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="" data-toggle="modal" data-target="#editUser{{$user->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> ပြင်ရန်</a>
                                                        <a href="" data-toggle="modal" data-target="#deleteUser{{$user->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> ဖျက်ရန်</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal of edit section -->
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
                                                    <div class="form-group">
                                                        <label for="">Role</label>
                                                        <select name="is_admin" id="" class="form-control">
                                                            <option value="1" @if ($user->is_admin == 1)
                                                                    selected
                                                            @endif>Admin</option>
                                                            <option value="2" @if ($user->is_admin == 2)
                                                                    selected
                                                            @endif>Cashier</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-warning btn-block">Update</button>
                                                    </div>
                                                </form>
                                        </div>
                                
                                    </div>
                                </div>
                    </div> 
                                                            <!-- Modal of delete section -->
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
                                             <!-- end modal section -->
                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
               </div>
               <div class="col-md-3">
                    <div class="card">
                            <div class="card-header"><h4>Search</h4></div>
                            <div class="card-body">
                                
                            </div>
                        </div>
               </div>
            </div>
        </div>
    </div>


    <!-- Modal section -->
    <div class="modal right fade" id="addUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">Add User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="{{ route('users.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control"> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select name="is_admin" id="" class="form-control">
                                            <option value="1">Admin</option>
                                            <option value="2">Cashier</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-dark btn-block">Save</button>
                                    </div>
                                </form>
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