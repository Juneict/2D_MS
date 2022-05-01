<style>
.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: rgb(52,73,94) !important;
}
</style>
<div class="row">
    <div class="morning">
        <div class="card-header">မနက် စာရင်း</div>
        @foreach($customers as $customer)
            <div class="col-lg-3 col-6 float-left">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3> {{$customer->total_price}} </h3>
                               
                                <p> {{$customer->customers->name}} </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('customers.index') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
            </div>
        @endforeach
    </div>  
    <div class="morning">
        <div class="card-header">ညနေ စာရင်း</div>
        @foreach($eveningcustomers as $customer)
            <div class="col-lg-3 col-6 float-left">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3> {{$customer->total_price}} </h3>
                                <p> {{$customer->customers->name}} </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('customers.index') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
            </div>
        @endforeach
    </div> 
</div>