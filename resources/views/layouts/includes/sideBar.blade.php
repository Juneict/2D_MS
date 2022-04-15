
<style>
    #sideBar ul.lead{
        border-bottom:1px solid #47748b;
        width: fit-content;
    }
    #sideBar ul li a{
        text-decoration : none;
        padding: 10px;
        font-size:1.1em;
        display: block;
        width:30vh;
        list-style: none;
        color:#008B8B;
    }
    #sideBar ul li a:hover{
        color:#fff;
        background-color:#008B8B;
    }
    #sideBar ul li a i{
        margin-right:10px;
    }
    #sideBar ul li.active>a, a[aria-expanded="true"]{
        color:#fff;
        background:#008B8B;
    }
</style>
<nav class="active" id="sideBar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href="" ><i class="fas fa-home fa-lg"></i> Home</a>
        </li>
        <li>
            <a href="{{ route('orders.index') }}"><i class="fa fa-box fa-lg"></i> Orders</a>
        </li>
        <li>
            <a href="{{ route('transactions.index') }}"><i class="fas fa-money-check-alt fa-lg"></i> Transactions</a>
        </li>
        <li>
            <a href="{{ route('products.index') }}"><i class="fa fa-truck fa-lg"></i> Products</a>
        </li>
    </ul>
</nav>
