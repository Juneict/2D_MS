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
                                    <a class="nav-link" id="home-tab" data-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">မနက် နံပါတ်စာရင်း</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ညနေ နံပါတ်စာရင်း</a>
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
 if (location.hash) {
  $('a[href=\'' + location.hash + '\']').tab('show');
}
var activeTab = localStorage.getItem('activeTab');
if (activeTab) {
  $('a[href="' + activeTab + '"]').tab('show');
}

$('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
  e.preventDefault()
  var tab_name = this.getAttribute('href')
  if (history.pushState) {
    history.pushState(null, null, tab_name)
  }
  else {
    location.hash = tab_name
  }
  localStorage.setItem('activeTab', tab_name)

  $(this).tab('show');
  return false;
});
$(window).on('popstate', function () {
  var anchor = location.hash ||
    $('a[data-toggle=\'tab\']').first().attr('href');
  $('a[href=\'' + anchor + '\']').tab('show');
});
</script>
@endsection