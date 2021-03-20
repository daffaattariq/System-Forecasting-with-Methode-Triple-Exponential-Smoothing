<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Forms</title>
  <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Update</h1>
                  <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/aksi_admin_loading')?>">Back to Data Loading</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forms update</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-body">
                  <?php
                    foreach($data as $data_loading)
                    {
                  ?>
                  <form action="<?php echo base_url('admin/aksi_admin_loading/do_edit_loading')?>?id_loading=<?php echo $data_loading['id_loading'] ?>" method="post">
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Loading</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1"
                       value="<?php echo $data_loading['tgl_loading'] ?>" required="" name="tgl_loading" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Wilayah Distributor</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="<?php echo $data_loading['nama_wilayah'] ?>" required="" name="nama_wilayah" disabled>
                    </div>                                  
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Choose Sales</label>
                       <select class="form-control" id="exampleFormControlSelect1" name="list_id_sales">
                        <option selected="selected" value="<?php echo $data_loading['id_sales'] ?>"><?php echo $data_loading['nama_sales']?></option>                                
                        
                        <?php 
                          foreach($sales as $data_sales)
                          {
                              if($data_sales['nama_sales'] != $data_loading['nama_sales']) 
                              {
                        ?>
                                  <option value="<?php echo $data_sales['id_sales'] ?>"><?php echo $data_sales['nama_sales'] ?></option>
                        <?php
                              }
                          }
                        ?>
                      </select>
                    </div>           
                    
                      <?php
                    }
                    ?>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                  <?php
                  
                  ?>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/ruang-admin.min.js"></script>

</body>
