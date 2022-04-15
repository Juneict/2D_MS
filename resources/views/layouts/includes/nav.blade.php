<style>
    .btn-outline{
        border-color:#008B8B;
        color:#008B8B;
    }
    .btn-outline:hover{
        background:#008B8B;
        color:#fff;
    }

</style>

<a href="{{ route('users.index') }}" class="btn btn-outline rounded-pill"   ><i class="fa fa-user"></i> အသုံးပြုသူများ</a>
<a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-box"></i> ဂဏာန်းများ</a>
<a href="{{ route('orders.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i> စာရင်းထည့်မည်</a>
<a href="{{ route('reports.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i> စာရင်း</a> 
<a href="{{ route('customers.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i>ဝယ်သူများ </a>