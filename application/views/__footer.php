</div>
</div>
</div>
</div>
<div class="sogeza-chini">
<footer class="main-footer bg-dark text-muted">
    <!-- Default to the left -->
    <center>
      <strong>Copyright &copy; <?php echo date('Y')?>, Ampula ICT Production.</strong> All rights reserved.
    </center>
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<!-- <script src="<?php echo base_url()?>assets/static/plugins/jquery/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/static/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/js/toastr.min.js"></script>

<script> 
    $('.select2').select2();
    $(".select2").select2({
      dropdownParent: $('#add_payemnt')
    });

    
<?php
 if ($this->session->flashdata('success')): ?>
  toastr.success('<?php echo $this->session->flashdata('success'); ?>');
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
  toastr.error('<?php echo $this->session->flashdata('error'); ?>');
<?php endif; ?>


$('.dropdown').click(function(){

$('.dropdown-menu').toggleClass('show');

});
$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});

</script>
<!--datatablecopy-->
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<!--datatablecopy-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

  <!-- DROPIFY FOR FILE UPLOADS -->
<script>
    $(document).ready(function() {
      $('.dropify').dropify({
        maxFileSize:'16M'
      });

    });
  </script>


<script type="text/javascript">

  $(document).ready(function() {
       
      var table = $('#myDataTable').DataTable( {
          responsive: true,
           // Processing indicator     
      } );
      var pdflink =  $('#example').DataTable( {
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

    $('#mydata').DataTable( {
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 
            {
                extend: 'print',
                customize: function (win) {
                    $(win.document.body).find('table').find('th:nth-child(3), td:nth-child(3)').hide();
                }
            },
            {
                extend: 'pdf',
                customize: function (doc) {
                    doc.content[1].table.body.forEach(function (row) {
                        row.splice(2, 1);
                    });
                }
            }
        ]
    } );
} );
function deletepayment(b,a){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
       type:'POST',
      url:'<?=site_url()?>/'+b+'/delete_payment',
      data:{'id':a,delete:'delete'},
      dataType:'html',
      success:function(data){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Deleted',
            text:'Payment has been deleted',
            showConfirmButton: false,
            timer: 1500
          }).then((result)=>{
                  window.location.reload();
                });
      }
    }); 
  }
  else {
        Swal.fire("Cancelled", "Payment not deleted!", "info");
        }
});
}

function checkApp(b,a){
            Swal.fire({
            title: 'Are you sure?',
            text: "You are about to accept an Appointment!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, Accept!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                type:'POST',
                url:'<?=site_url()?>/'+b+'/accept_appointment',
                data:{'id':a,},
                dataType:'html',
                success:function(data){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Accepted',
                        text:'Appointment Accepted',
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result)=>{
                            window.location.reload();
                            });
                }
                }); 
            }
            else {
                    Swal.fire("Cancelled", "Appointment Not accepted!", "info");
                    }
            });
        }

        function cancelApp(b,a){
            Swal.fire({
            title: 'Are you sure?',
            text: "You are about to Cancel an Appointment!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, Cancel!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                type:'POST',
                url:'<?=site_url()?>/'+b+'/cancel_appointment',
                data:{'id':a,},
                dataType:'html',
                success:function(data){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Canceled',
                        text:'Appointment Canceled',
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result)=>{
                            window.location.reload();
                            });
                }
                }); 
            }
            else {
                    Swal.fire("Cancelled", "Appointment Not Canceled!", "info");
                    }
            });
        }


  function openTab(event, tabId) {
  // Get all tab content elements
  var tabContents = document.getElementsByClassName("tab-content");

  // Remove "active" class from all tab content elements
  for (var i = 0; i < tabContents.length; i++) {
    tabContents[i].classList.remove("active");
  }

  // Show the selected tab content
  var selectedTab = document.getElementById(tabId);
  selectedTab.classList.add("active");
}
  </script>
  
</html>
