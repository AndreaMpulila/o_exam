<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?=base_url()?>/img/favicon/site.webmanifest">
<link rel="mask-icon" href="<?=base_url()?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- end of favicon -->
	<?php $act=$this->session->userdata('active_link');
?>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/static/plugins/toastr/toastr.min.js">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- DataTable -->
<link rel="stylesheet" href="<?php base_url()?>assets/static/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php base_url()?>assets/static/plugins/datatables-responsive/js/dataTables.responsive.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>



<!-- Support for PDF CSV and Copy Buttons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/fontawesome-free/css/all.min.css">
	
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/static/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<title>O Exam| <?=isset($act)?$act:'Home'?></title>
<style>
.login-page {
  background: url('<?php echo base_url()?>assets/profiles/book.png');
  background-repeat: no-repeat;
  background-size:contain;
  background-position: center;
  opacity: .90;
  padding: 0;
  margin: 0;
}
.swal-overlay {
  background-color: rgba(0, 0, 0, 0.8) !important;
}

</style>
</head>
	
<body class="login-page ">
	<div class="container ">
        
            <div class="text-dark h2 text-bold text-uppercase text-center  p-3" style="background:#deef;font-size:38px;">
			Online Examination System
			  </div>
		<div class="d-flex justify-content-center ">
			<div class="card shadow w-75" >			
				<div class="d-flex justify-content-center">
					<h3 class="form-title text-dark text-center p-4">Login</h3>

				</div>
				<div class="d-flex justify-content-center ">
					<?php if ($this->session->flashdata('error')): ?>
					<span class="bg-danger w-50 text-center p-2"><?php echo $this->session->flashdata('error'); ?></span>
				</div>
  <?php endif; ?>
				<div class=" d-flex justify-content-center form_container">
					<form method="POST" action="" id="log-form">
						<div class="input-group  m-3">
						<div class="input-group-append" style="border:1px solid #0df">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" id="username" class=" form-control" placeholder="Email or Phone" value="<?=set_value('username')?>" style="border:1px solid #0df" >
						</div>
						<div class="text-danger"><?=form_error('username')?></div>
						<div class="input-group m-3"><div class="input-group-append" style="border:1px solid #0df" >
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" name="password" id="password" class=" form-control" autocomplete="false" placeholder="Password..." style="border:1px solid #0df" >
						</div>
						<div class="text-danger"><?=form_error('password')?></div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 				<input class="btn login_btn btn-block w-50 btn-primary m-3" type="submit"name="submit" value="Login" autocomplete="false">
				   			</div>
							<div class="d-flex justify-content-center mt-3 login_container">
							<!-- <p class="mr-3"><a href="#">Forget Password?</a></p> -->
							<!-- <p class="ml-3">New here? <a href="<?=site_url()?>register">Register </a></p> -->

							</div>
					</form>
					
				</div>
		      <div class="msg">
            
          </div>
				
				</div>
				
			</div>
		
		</div>
<script src="<?=base_url()?>assets/static/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/static/plugins/toastr/toastr.min.js"></script>
<script src="<?=base_url()?>assets/static/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
	$(document).ready(function() {
		<?php if ($this->session->flashdata('success')): ?>
    toastr.success('<?php echo $this->session->flashdata('success'); ?>');
  <?php endif; ?>
  <?php if ($this->session->flashdata('error')): ?>
    toastr.error('<?php echo $this->session->flashdata('error'); ?>');
  <?php endif; ?>
  <?php if ($this->session->flashdata('help')): ?>
    // swal('Warning','','warning');
let timerInterval
Swal.fire({
icon:'error',
  title: 'Oops!',
  html: '<?php echo $this->session->flashdata('help'); ?>',
  timer: 10000,
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
  }
})
  <?php endif; ?>
	$('#log-form').validate({
	
	rules:{
		username:{
			required:true
		},
		password:{
			required:true
		}
	},
	messages:{
		username:{
			required: '',

		},
		password:{
			required:'',

		}
	},
	errorPlacement: function(error, element) {
    element.addClass('border border-danger');
    error.insertAfter(element);
  },
	submitHandler:function(e){
		e.preventDefault();
		if($('#log-form').valid){
			this.submit();
		}
	}
	});
});
</script>
</body>

</html>