<table id="data" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                              
                                                <th>နံပါတ်</th>
                                                <th>ကန့်သက်</th>
                                                <th>စုစုပေါင်း</th>
                                                <th>လုပ်ဆာင်ချက်များ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                               
                                                <td>{{$product->num}}</td>
                                                <td>{{$product->limit}}</td>
                                                <td>{{$product->total}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="" data-toggle="modal" data-target="#editproduct{{$product->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> ပြင်ရန်</a>
                                                        <a href="" data-toggle="modal" data-target="#deleteproduct{{$product->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> ဖျက်ရန်</a>
                                                        <a href="" data-toggle="modal" data-target="#addprice{{$product->id}}" class="btn btn-sm btn-warning"><i class="fa fa-trash"></i> ကြေးထည့်ရန်</a>
                                                    </div>
                                                </td>
                                            </tr>
                         <!-- Modal of add section -->
                        @include('Products.add')                 

                                            <!-- Modal of edit section -->
                        @include('Products.edit')
                                                            <!-- Modal of delete section -->
                                            @include('Products.delete')
                                             <!-- end modal section -->
                                            @endforeach
                                          
                                        </tbody>
                                       
                                </table>