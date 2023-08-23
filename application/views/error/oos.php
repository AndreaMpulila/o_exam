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
  <title>OOS | WIS</title>
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

<link rel="stylesheet" href="<?php echo base_url()?>assets/static/dist/style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/messagestyle.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/center-simple.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/message/loading-bar.css">
</head>
<body>
    <div class="container">
        <div class="card m-2">
            <div class="card-header h1 m-1">
            
                <table class="table">
                    <tr>
                        <th><a href="<?=base_url()?>" class="btn btn-primary btn-sm m-4"><i class="fa fa-home"></i> Go Home</a></th>
                        <th>
                        <div class="text-center ">
                <i class=" nav-icon fa fa-pause text-danger" aria-hidden="true"></i> SUSPENDED
                </div>
                        </th>
                        <th> <img src="<?php echo base_url().'img/favicon/wis.png'?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8 bg-light" width="100" height="100"></th>
                    </tr>
                </table>
            </div>
            <div class="card-body">
                <div class="h5">
               <p> Dear <b class="text-muted"><?=$this->session->userdata('fname').' '.$this->session->userdata('lname')?></b>,</p>

<p>We hope this message finds you well. We are reaching out to inform you that, regrettably, your account on our system has been suspended temporarily.</p>

<p>Please be aware that this action has been taken due to <?=strpos( $this->session->userdata('fname'),'migration')==false?'Migration request from one street/ward/district or region ':' Death of an Account user'?>, as we strive to maintain a safe and harmonious environment for all our users. Our priority is to ensure the integrity and security of our platform.<br>

During this suspension period, you will not be able to access your account or utilize any features of our system. We kindly request your cooperation and understanding in this matter.</p>

<p>If you believe that this suspension is in error or have any concerns, please reach out to our support team at <br>
<?php
$result =$this->db->query("SELECT * from users where usertype ='admin' limit 1")->result_array();
echo 'Phone: <b class="text-primary text-muted m-1"><u>'.$result[0]['phone'].'</u></b><br>';
echo 'Email: <b class="text-info text-muted m-1"><u>'.$result[0]['email'].'</u></b>'?> <br> For further assistance. We will be more than happy to address any questions or issues you may have.</p>

<p>Thank you for your understanding and patience in this matter. We value you as a user and look forward to resolving this situation together. Once the suspension is lifted, we welcome you back to continue enjoying our services.<br>

Best regards,</p>

<p class="text-center">
Ward Informer System <br>
<?= ucfirst($result[0]['usertype']) ?>
</p>
                </div>
            </div>
        </div>
    </div>
</body>