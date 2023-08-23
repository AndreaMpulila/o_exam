<?php $act =$this->session->userdata('active_link');
$data['user'] =$this->session->userdata('user');
$data['has_street'] =$this->session->userdata('location');
$data['act']= $act;
$data['refer']=$mpux;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit ="true">
  <!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?=base_url()?>/img/favicon/site.webmanifest">
<link rel="mask-icon" href="<?=base_url()?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- end of favicon -->
  <title><?php echo $act?> | WIS</title>
  <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/fontawesome-free/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url()?>assets/static/dist/css/adminlte.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/toastr.min.css">


<link rel="stylesheet" href="<?php echo base_url()?>assets/static/dist/style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/messagestyle.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/center-simple.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/loading-bar.css">


<!--datatable-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<!-- download access -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- SELECT2 CDNS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- End -->
<!-- Include Dropify CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>






<style>
* {
font-family:'Arial','Cambria';
}
#side-link{
  background:#deef;
}
label.error {
    font-size: small;
    color: red;
}
</style>

</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" id="navigation">



    <div class="navbar  position-relative float-left">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

    </div>
    
    <div class="item   h2 text-bold text-uppercase text-light" style="font-family:cambria;">
     the ward informer system
    </div>
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  sidebar-dark-success elevation-0">
      <!-- id="side-link"> -->
    <!-- Brand Logo -->
    <a href="" class="brand-link" >
      <img src="<?php echo base_url()?>assets/profiles/avatar5.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8 bg-light">
      <?php
      
      $fname =ucfirst($this->session->userdata('user'));
      $result = substr($fname, 0, strpos($fname, "@"));
      $lname =ucfirst($result);
      ?>
      <span class="brand-text  font-weight-light"><small ><b></b> -- <?=$fname[0].'.'.$lname;?></small></span>
    </a>
    <?php $this->load->view('__side_bar',$data);?>
            
    <!-- /.content -->
  