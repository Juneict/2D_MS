<div class="row">
    <div class="col-md-8 m-auto">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ဝယ်သူ</th>
                        <th>နံပါတ်</th>
                        <th>ကြေး</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($datatwos as $data)
                        <tr>
                                                            
                                                                    
                            <td>{{$data->customers->name}}</td>
                            <td>{{$data->product_id}}</td>
                            <td>{{$data->price}}</td>
                                                            
                         </tr>
                    @endforeach
                </tbody>
                {{$datatwos->links()}} 
        </table>
        <div class="card-header"> <h4>စုစုပေါင်း {{$evening_total->sum('price')}}</h4>
                
        </div>
    </div>
                                            
</div>