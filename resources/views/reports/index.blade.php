
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2D-MS | Daily Sale</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container ">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          Daily Service Report  
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 ">
        <table id="customer" class="table table-striped table-bordered">
          <thead>
              <tr>
                
              <th>ဝယ်သူ</th>
                <th>နံပါတ်</th>
                <th>ထိုးကြေး</th>
                
                <th>အချိန်</th>
             
              </tr>
          </thead>
          <tbody>
          @foreach($orders as $order)
            <tr>
             
              
              <td>{{$order->customers->name}}</td>
                <td>{{$order->products->num}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->period}}</td>               
          </tr>
          
          @endforeach 
          </tbody>
          <tfoot>
              <tr>
                  <th colspan="1" class="text-center">Total</th>
                  <td>{{$orders->sum('price')}}</td>
              </tr>
          </tfoot>
        </table>

      </div>
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      
    </div>
    <div class="row no-print pl-3">
        <div class="col-md-12">
          
          <a href="/orders" class="btn btn-success mr-3 float-right">back</a>
        </div>
      </div><br>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#customer').DataTable();
} );
</script>

</body>
</html>

