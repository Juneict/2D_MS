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
               <div class="col-md-12 float-right">
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
                                    <h4 style="float:left">အသုံးပြုနည်း</h4>
                                   
                        </div>
                        <div class="card-body">
                                <table id="data" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                
                                                    <th>အကွက်အမျိုးအမည်</th>
                                                    <th>ရိုတ်ရမည့်ပုံစံ</th>
                                                    <th>ရှင်းလင်းချက်</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>တစ်ကွက်တည်း</td>
                                                    <td>43</td>
                                                    <td>43 တစ်ကွက်တည်း </td>
                                                </tr>
                                                <tr>
                                                    <td>ရောင်း(ဝ်)</td>
                                                    <td>43R</td>
                                                    <td>43 +34 </td>
                                                </tr>
                                                <tr>
                                                    <td>ဘရိတ်</td>
                                                    <td>4B</td>
                                                    <td>4 ဘရိတ်</td>
                                                </tr>
                                                <tr>
                                                    <td>ဘရိတ်(ရောင်း(ဝ်))</td>
                                                    <td>4E</td>
                                                    <td>4  ဘရိတ်(ရောင်း(ဝ်))</td>
                                                </tr>
                                                <tr>
                                                    <td>ပါဝါ</td>
                                                    <td>W</td>
                                                    <td>ပါဝါ နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>နက္ခတ်</td>
                                                    <td>N</td>
                                                    <td> နက္ခတ် နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>ညီကို</td>
                                                    <td>X</td>
                                                    <td>ညီကို နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>အပူး</td>
                                                    <td>A</td>
                                                    <td>အပူး နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>ဆယ်ပြည့်</td>
                                                    <td>S</td>
                                                    <td>ဆယ်ပြည့် နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>စုံစုံ</td>
                                                    <td>++</td>
                                                    <td>စုံစုံ နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>မမ</td>
                                                    <td>--</td>
                                                    <td>မမ နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>စုံမ</td>
                                                    <td>+-</td>
                                                    <td>စုံမ နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>မစုံ</td>
                                                    <td>-+</td>
                                                    <td>မစုံ နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>ထိပ်စီး</td>
                                                    <td>1F</td>
                                                    <td>1ထိပ် နံပါတ်များ</td>
                                                </tr>
                                                <tr>
                                                    <td>နောက်ပိတ်</td>
                                                    <td>1P</td>
                                                    <td>1 နောက်ပိတ် နံပါတ်များ</td>
                                                </tr>
                                            </tbody>
                                           
                                </table>
                                    
                        </div>
                          
                    </div>
             
                        
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