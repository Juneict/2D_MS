@extends('layouts.app')

@section('content')


<style>   
</style>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
               
                <div class="col-md-12">       
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">မနက် နံပါတ်စာရင်း</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ညနေ နံပါတ်စာရင်း</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="data-tab" data-bs-toggle="tab" data-bs-target="#data" type="button" role="tab" aria-controls="data" aria-selected="false">မနက် အ‌ရောင်းစာရင်း</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="datatwo-tab" data-bs-toggle="tab" data-bs-target="#datatwo" type="button" role="tab" aria-controls="datatwo" aria-selected="false">ညနေ အ‌ရောင်းစာရင်း</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="datathree-tab" data-bs-toggle="tab" data-bs-target="#datathree" type="button" role="tab" aria-controls="datatwo" aria-selected="false">တစ်ရက်စာ စုစုပေါင်းစာရင်း</button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      @include('reports.morninglist')
                                    </div>
                                        <!-- morning data end -->
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       @include('reports.eveninglist')
                                        <!-- evening data end -->
                                    </div>
                                    <div class="tab-pane" id="data" role="tabpanel" aria-labelledby="data-tab">
                                        @include('reports.morningdata')
                                       
                                    </div>
                                    <div class="tab-pane" id="datatwo" role="tabpanel" aria-labelledby="datatwo-tab">
                                       @include('reports.eveningdata')
                                       
                                    </div>
                                    <div class="tab-pane" id="datathree" role="tabpanel" aria-labelledby="datathree-tab">
                                        @include('reports.dashboard')
                                    </div>
                            </div>
                            
                </div>
            </div>
                
        </div>
            
    </div>
   
@endsection

@section('script')
<script>
   
</script>
@endsection