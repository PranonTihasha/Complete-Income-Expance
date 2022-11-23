<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{assets/images/favicon.ico}">

        
        <!-- jquery.vectormap css -->
        <link href="{{ asset('frontend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('frontend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('frontend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
        
        
        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('frontend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

<body>
    
<div class="card">
  <div class="card-body">
   <h4 class="card-title"> Add expance</h4>
   <form method="post" action="{{ route('expance.store') }}" >
@csrf


<div class="form-group">
  <label for="exampleFormControlSelect1">Expnce From</label>
  <select class="form-control" name="expance_from" id="exampleFormControlSelect1">
    <option>paper</option>
    <option>mouse</option>
    <option>Laptop</option>
    <option>Pen</option>
    <option>Tissue box</option>
  </select>
</div>





<div class="form-group">
  <label for="exampleFormControlSelect1">expance Amount</label>
  <input type="text" name="expance_amount" class="form-control" id="">
</div>
<div class="form-group">
  <label for="exampleFormControlSelect1">Bank</label>
  <select class="form-control" name="bank" id="exampleFormControlSelect1">
    <option>Brac Bank</option>
    <option>NRB</option>
  </select>
</div>

<div class="form-group">
  <label for="exampleFormControlSelect1">Income date</label>
  <input type="date" name="date" class="form-control" id="">
</div>

<div class="form-group" > <br>
<input type="submit" class="btn btn-info waves-effect waves-light" value="Submit ">
</div>


</form>

  </div>
</div>


</body>


</html>