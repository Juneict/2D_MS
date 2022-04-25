<div class="row">

        <div class="col-md-8 m-auto">
            
                <table class="table table-bordered table-striped">
                    <thead>
                                <tr>
                                    <th>ဝယ်သူ</th>
                                    <th>နံပါတ်</th>
                                    <th>ကြေး</th>
                                </tr>
                    </thead>
                    <tbody>
                         @foreach($datas as $data)
                                <tr>
                                                            
                                                                    
                                    <td>{{$data->customers->name}}</td>
                                    <td>{{$data->products->num}}</td>
                                    <td>{{$data->price}}</td>
                                                            
                            </tr>
                        @endforeach
                        {{$datas->links()}} 
                    </tbody>
                   
                </table>
                <div class="card-header"> <h4>စုစုပေါင်း {{$total->sum('price')}}</h4>
                
                </div>
            
        </div>
                                        
 </div>
