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
    @livewire('orders')


    

<script>
    
  $(function () {
    $('div.alert').delay(3000).slideUp(300);
  });
 
</script>     
@endsection