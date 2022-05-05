@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-6 ">
                    <div class="card-header">
                        စာရင်းရှင်းရန် စုစုပေါင်း
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>အချိန်</th>
                                <th>ဝယ်သူ</th>
                                <th>အဝယ်စာရင်း</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                    <td>မနက်</td>
                                    <td>{{$data->customers->name}}</td>
                                    <td>{{$data->total_price}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
        </div>
        <div class="col-md-6 ">
                    <div class="card-header">
                        စာရင်းရှင်းရန် စုစုပေါင်း
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>အချိန်</th>
                                <th>ဝယ်သူ</th>
                                <th>အဝယ်စာရင်း</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datastwo as $data)
                            <tr>
                                    <td>ညနေ</td>
                                    <td>{{$data->customers->name}}</td>
                                    <td>{{$data->total_price}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
        </div>
</div>
    
       
        
@endsection