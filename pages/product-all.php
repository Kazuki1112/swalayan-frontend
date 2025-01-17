<?php
    include "../template/header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="Swalayan Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Swalayan</span>
    </a>

    <?php
    include "../template/sidebar.php";
    ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="../pages/product.php">Product</a></li>
              <li class="breadcrumb-item active"><a href="#">AllProduct</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <!-- Small boxes (Stat box) -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
            <!-- small box -->
        
          <!-- ./col -->
        
        <!-- /.row -->
        <!-- Main row -->
        
          <!-- Left col -->
          <!-- <section class="content"> -->



            <!-- Isi ne nde kene  -->
            <div class="card">
                <div class="card-header">
                  <div class="form-row" >
                    <div class="form-group col-md-3">
                      <h3 class="card-title" style="margin-right: 10px;">All Product</h3>
                    </div>
                      <div class="form-group col-md-3">
                        <label for="inputId">Id</label>
                        <input type="number" class="form-control" id="inputId" placeholder="Select ID">
                      </div>
                      <div class="form-group col-md-3">
                        <button id="searchButton" type="submit"
                        class="small-box bg-info" style="margin-bottom: 0px; border: none; height:100%; width: 100%">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped table-bordered" >
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>price</th>
                        <th>Product Description</th>  
                        <th>stock</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Biore</td>
                        <td>10000</td>
                        <td>This is a description of product 1.</td>
                        <td>100</td>                 
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>sunsilk</td>
                        <td>10000</td>
                        <td>This is a description of product 2.</td>
                        <td>70</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>head&Shoulder</td>
                        <td>10000</td>
                        <td>This is a description of product 3.</td>
                        <td>90</td>
                      </tr>
                    </tbody>
                  </table>
          <!-- </section> -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
  include '../template/footer.php';
?>
</body>
</html>
