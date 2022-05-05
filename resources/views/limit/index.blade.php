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
                                    <a class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">မနက် နံပါတ်စာရင်း</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ညနေ နံပါတ်စာရင်း</a>
                                </li>
                              
                            </ul>
                            <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      @include('limit.morninglist')
                                    </div>
                                        <!-- morning data end -->
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       @include('limit.eveninglist')
                                        <!-- evening data end -->
                                    </div>
                                   
                            </div>
                            
                </div>
            </div>
                
        </div>
            
    </div>
    
   
@endsection

@section('script')
<script>
  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
  });
  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
    $('#myTab a[href="' + activeTab + '"]').tab('show');
  }
</script>
@endsection