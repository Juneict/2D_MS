<div class="form-check col-md-12 ">
<select name=""  class="form-control" wire:model="selectedCategory">
                <option value="" class="form-control">အမျိုးအစားရွှေးရန် </option>
                    @foreach( $categories as $category)
                    <option value="{{ $category->id }}" class="form-control">
                    {{ $category->cat_name}}
                </option>
            @endforeach
</select>  
@if(!is_null($products))
                    <td>
                        <select name="product_id[]"  class="form-control product_id mt-3" wire:model="selectedProduct">
                            <option value="" class="form-control">နံပါတ်ရွေးရန်</option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}" class="form-control">
                                            {{$product->num}}
                                    </option>
                                @endforeach                                                    
                        </select>
                    </td>
@else
<td>
                        <select name="product_id[]"  class="form-control product_id mt-3" wire:model="selectedProduct">
                            <option value="" class="form-control">နံပါတ်ရွေးရန်</option>
                                @foreach($allproducts as $product)
                                    <option value="{{$product->id}}" class="form-control">
                                            {{$product->num}}
                                    </option>
                                @endforeach                                                    
                        </select>
                    </td>
                  
@endif

                    


<table class="table table-left mt-3">
    <thead>
            <tr>
                <th></th>
                <th>နံပါတ် *</th>
                <th>ကြေး *</th>
                <th><a href="" class="btn btn-sm btn-success add_more "><i class="fas fa-plus"></i></a></th>
            </tr>
    </thead>
    <tbody class="addMoreProduct">
                    
            <tr> 
                <td>1</td>
                    <td>{{$selectedProduct}}
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="price">
                            <input type="text" name="price[]" class="form-control price"> 
                            </label>
                        </div>
                    </td>
                    <td><a href="" class="btn btn-sm btn-danger delete"><i class="fas fa-times"></i></a></td>
            </tr>
         
    </tbody>
</table> 
</div>
<div class="modal-footer">
    <button class="btn btn-dark btn-block">Save</button>                                      
</div> 