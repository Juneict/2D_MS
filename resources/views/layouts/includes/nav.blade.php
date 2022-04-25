<style>
    .btn-outline{
        border-color:rgb(52,73,94);
        color:rgb(52,73,94);
    }
    .btn-outline:hover{
        background:rgb(52,73,94);
        color:#fff;
    }

</style>

<a href="{{ route('users.index') }}" class="btn btn-outline rounded-pill"   ><i class="fa fa-user"></i> အသုံးပြုသူများ</a>
<a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-box"></i> နံပါတ်များ</a>
<a href="{{ route('orders.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i> စာရင်းထည့်မည်</a>
<a href="{{ route('reports.index') }}" class="btn btn-outline rounded-pill"><i class="fa-solid fa-list"></i> စာရင်း</a> 
<a href="{{ route('customers.index') }}" class="btn btn-outline rounded-pill"><i class="fa-solid fa-address-book"></i> ဝယ်သူများ </a>