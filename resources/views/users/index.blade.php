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
                                            @include('users.edit')
                                                            <!-- Modal of delete section -->
                                            @include('users.delete')
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
    @include('users.create') 

<script>
  $(function () {
    $('div.alert').delay(3000).slideUp(300);
  });
</script>     
@endsection