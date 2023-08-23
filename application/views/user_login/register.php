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
<script src="<?=base_url()?>assets/static/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTable -->
<link rel="stylesheet" href="<?php base_url()?>assets/static/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php base_url()?>assets/static/plugins/datatables-responsive/js/dataTables.responsive.min.js">


<!-- Support for PDF CSV and Copy Buttons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/fontawesome-free/css/all.min.css">
	
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/static/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/static/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">


</head>
<title><?php echo $act?> | WIS</title>

<body>
    <style>
.login-page {
  background: url(<?php echo base_url()?>img/favicon/wis.png);
  background-repeat: no-repeat;
  background-size: cover; 
  background-position: center;!important;
  opacity: .9;
  padding: 0;
  margin: 0;
}
.error {
  font-weight: normal !important;
}
</style>
</head>
	
<body class="login-page" >
	<div class="container ">
        
            <div class="text-primary h2 text-bold text-uppercase text-center  p-3" style="background:#deef;font-size:38px;">
			The Ward Informer System
			  </div>
		<div class="d-flex justify-content-center ">
			<div class="card shadow shadow-90 w-100">			
				<div class="d-flex justify-content-center">
					<h3 class="form-title text-dark text-center p-4">Registration Form</h3>

				</div>
				
				<div class=" card-body form_container bg-grey">
        <?php if ($this->session->flashdata('error')): ?>
      <div class="bg-danger text-center m-3 p-2">
      <?php echo $this->session->flashdata('error'); ?>
    </div>
        <?php endif; ?>
					<form method="POST" action="" id="log-form">
                        <div class="form-group row">
                            <span class="col-sm-2">First Name <ampul class="text-red"> *</ampul></span>
                            <input type="text" value="<?=set_value('fname')?>"name="fname" id="fname" class="form-control col-sm-9"><div class="error"> <?=form_error('fname')?></div>
                          </div>
                          
                          <div class="form-group row">
                            <span class="col-sm-2">Last Name <ampul class="text-red"> *</ampul></span>
                            <input type="text" value="<?=set_value('lname')?>"name="lname" id="lname" class="form-control col-sm-9"><?=form_error('lname')?>
                        </div>
						<div class="form-group row">
              <span class="col-sm-2">Email <ampul class="text-red"> *</ampul></span></span>
              <input type="email" value="<?=set_value('email')?>"name="email" id="email" class="form-control col-sm-9">
							
        </div>
        <div class="form-group row">
            <span class="col-sm-2" >Phone  <ampul class="text-red"> *</ampul></span>
							<input type="tel" value="<?=set_value('phone')?>"name="phone" id="phone" class="form-control  " minlength="13" maxlength="13" >

					</div>
						
						<div class="form-group row">
							<span class="col-sm-2">Password <ampul class="text-red"> *</ampul></span>
							<input type="password" value="<?=set_value('password')?>"name="password"  autocomplete ="false" id="password" class="col-sm-9 form-control">
            </div>
            <div class="form-group row">
              <span class="col-sm-2">Confirm Password <ampul class="text-red"> *</ampul></span>
							<input type="password" value="<?=set_value('cpassword')?>"name="cpassword" autocomplete ="false"  id="cpassword" class="col-sm-9 form-control">
						</div>
						<small id="mismatch"class="text-danger text-center">Password Mis matches</small>
							<div class="d-flex justify-content-center mt-3 login_container">
				 				<input class="btn login_btn btn-block w-25 btn-primary m-3" type="submit"name="submit" value="Submit">
				   			</div>
							<div class="d-flex justify-content-center mt-3 login_container">
							<p>Have an Account? <a href="<?=site_url()?>">Login </a></p>

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
  title: 'Ooops!',
  html: '<?php echo $this->session->flashdata('help'); ?>',
  timer: 10000,
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
  }
})
  <?php endif; ?>

    toastr.error('<?php echo $this->session->flashdata('error'); ?>');
  
    $("#mismatch").hide();
    $("#valid-msg").hide();
    
const input = document.querySelector("#phone"),
errorMsg =document.querySelector("#error-msg"),
ValidMsg =document.querySelector("#valid-msg");
var errorMap =["Invalid number","Invalid Counrty Code","Too short Number",'Too Long '];

var phone_number = window.intlTelInput(input, {
            initialCountry: "tz",
            separateDialCode: true,
            preferredCountries: ["tz", "ke", "ug", "bi"],
            hiddenInput: "phone",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.0/js/utils.js",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    const countryCode = (resp && resp.country) ? resp.country : "tz";
                    callback(countryCode);
                });
            }   
        });


        $("#phone").keyup(function() {
            var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='phone']").val(full_number);
        });

    $('#cpassword').keyup(function(){
        if($("#password").val()!= $("#cpassword").val()){
            $("#mismatch").show();
        }else{
            $("#mismatch").hide();
        }
    });

  $('#log-form').validate({
  rules:{
    fname:{
        required:true,
    },
    lname:{
        required:true,
    },
    email:{
      required:true,
    },
    phone:{
      required:true,
    },
    password:{
      required:true
    },
    cpassword:{
      required:true
    }
  },
  messages:{
    phone:{
      required:"Phone Number is required",
    },
    email:{
      required:"Email Field is required"
    },
    password:{
      required:"Password is Required"
    },
    cpassword:{
      required:"Confirming Password is required"
    },
    fname:{
        required:'First Name field is required'
    },
    lname:{
        required:'Last Name field is required'
    }
  },
  errorPlacement: function(error, element) {
    element.addClass('border border-danger');
    element.addClass('error');
    error.addClass('text-danger'); 
    error = $("<small>").append(error);
    error.insertAfter(element);
  },
  submitHandler:function(form){
    form.submit();
  }
});

$("input").on("invalid", function(event) {
  console.log(event);
    event.preventDefault();
    var errorMessage = this.getAttribute("data-error-message");
    if (errorMessage) {
      this.setCustomValidity(errorMessage);
    } else {
      this.setCustomValidity("");
    }
  });
  
  $("input").on("input", function(event) {
    this.setCustomValidity("");
  });

});
</script>
</body>
</html>