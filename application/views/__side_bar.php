<div class="sidebar p-0">
        <!-- Sidebar user panel (optional) -->
       
        <!-- Sidebar Menu -->
        <nav class="mt-3">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             
             <li class="nav-item">
              <a href="<?php echo site_url().$refer?>" class="nav-link <?php if($act =="Home"){ echo "active";}?>" >
                <i class="nav-icon fas fa-tachometer-alt"></i> 
                <p>Dashboard</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <!-- Admin Side Bars -->
  <?php
  if($refer =='Admin'){?>
            
            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/users" class="nav-link  <?php if($act =="Users"){ echo "active";}?>">
                <i class="nav-icon fa fa-users"></i>
                 <p>Users</p>
              </a>
            </li>
            
            <div class="dropdown-divider"></div>

            <li class="nav-item">
              <a href="<?=site_url().$refer?>/questions" class="nav-link <?php if($act =="Questions"){ echo "active";}?> ">
                <i class="nav-icon fa fa-question-circle"></i>
                  <p>Questions</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="<?=site_url().$refer?>/reports" class="nav-link <?php if($act =="Reports"){ echo "active";}?> ">
                <i class="nav-icon fa fa-signal"></i>
                  <p>Reports</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="<?=site_url().$refer?>/settings" class="nav-link <?php if($act =="Settings"){ echo "active";}?> ">
                <i class="nav-icon fa fa-cogs"></i>
                  <p>Settings</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
           

<?php }?>

<!-- End of Admin Side Bars -->

<!-- Ward Officer Side Bars -->
<?php
  if($refer =='WOfficer'){?>
            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/services"  class="nav-link <?php if($act =="Services"){ echo "active";}?>">
                <i class="nav-icon fas fa-university"></i>
            <p>Services</p>
              </a>
            </li>
            
            
            <div class="dropdown-divider"></div>
              <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/complains" class="nav-link  <?php if($act =="Complains"){ echo "active";}?>">
                <i class="nav-icon fa fa-info-circle"></i>
            <p> Reported Issues </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
              <li class="nav-item ">
                    <a href="<?php echo site_url().$refer?>/users"  class="nav-link <?php if($act =="Users"){ echo "active";}?> ">
                      <i class="nav-icon fa fa-users"></i>
                      <p>Users</p>
                    </a>
              </li>
              <div class="dropdown-divider"></div>

              <li class="nav-item <?php if($act =='Messages' || $act =='Appointment'){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
  <a href="#" class="nav-link <?php if($act =="Messages"|| $act =='Appointment'){ echo "active";}?> ">
      <i class="nav-icon fa fa-desktop"></i>
        <p>Help Desk</p>
    </a>
     <ul class=" nav nav-treeview ">

     <li class="nav-item ">
    <a href="<?php echo site_url().$refer?>/messages" class="nav-link  <?php if($act =="Messages"){ echo "active";}?>">
      <i class="nav-icon ion-chatbubbles"></i>
  <p> Advices </p>
    </a>
  </li>
  <li class="nav-item ">
          <a href="<?=site_url().$refer?>/appointment"  class="nav-link <?php if($act =="Appointment"){ echo "active";}?> ">
            <i class="nav-icon fa fa-file" style="size:200px"></i>
            <p>Appointment</p>
          </a>
        </li>
    </ul> 
  </li>

  <div class="dropdown-divider"></div>

              <li class="nav-item <?php if( $act =='Advertisement' || $act =='composeSms' ){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
  <a href="#" class="nav-link <?php if( $act =='Advertisement' || $act =='composeSms' ){ echo "active";}?> ">
      <i class="nav-icon fa fa-folder"></i>
        <p>Notes Board</p>
    </a>
     <ul class=" nav nav-treeview ">
     <li class="nav-item ">
          <a href="<?=site_url().$refer?>/advertisement"  class="nav-link <?php if($act =="Advertisement"){ echo "active";}?> ">
            <i class="nav-icon ion ion-stats-bars " style="size:200px"></i>
            <p>News</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="<?=site_url().$refer?>/composeSms"  class="nav-link <?php if($act =="composeSms"){ echo "active";}?> ">
            <i class="nav-icon ion ion-volume-high " style="size:300px;"></i>
            <p>BroadCast </p>
          </a>
        </li>
    </ul> 
  </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="<?=site_url().$refer?>/payments" class="nav-link <?php if($act =="Payments"){ echo "active";}?> ">
                <i class="nav-icon fa fa-list-alt"></i>
                  <p>Payment</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
               <li class="nav-item ">
                    <a href="<?=site_url().$refer?>/reports"  class="nav-link <?php if($act =="Reports"){ echo "active";}?> ">
                      <i class="nav-icon fa fa-signal" style="size:200px"></i>
                      <p>Account</p>
                    </a>
                  </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item ">
                    <a href="<?=site_url().$refer?>/usage"  class="nav-link <?php if($act =="Usage"){ echo "active";}?> ">
                      <i class="nav-icon fa fa-laptop"></i>
                      <p>Usages</p>
                    </a>
                  </li>
            <div class="dropdown-divider"></div>
<?php }?>

<!-- End of Ward officer sidebars -->


<!--  Street Officer Side Bars -->
<?php
  if($refer =='SOfficer'){?>
  
            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/services"  class="nav-link <?php if($act =="Services"){ echo "active";}?>">
                <i class="nav-icon fas fa-university"></i>
            <p>Services</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/users"  class="nav-link <?php if($act =="Users"){ echo "active";}?>">
                <i class="nav-icon fas fa-users"></i>
            <p> Add Users</p>
              </a>
            </li>
          
            <div class="dropdown-divider"></div>

            <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/complains" class="nav-link  <?php if($act =="Complains"){ echo "active";}?>">
                <i class="nav-icon fa fa-comments"></i>
            <p> Reported Issues </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item <?php if($act =='Messages' || $act =='Appointment'){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
            <a href="#" class="nav-link <?php if($act =="Messages"|| $act =='Appointment'){ echo "active";}?> ">
                <i class="nav-icon fa fa-signal"></i>
                  <p>Help Desk</p>
              </a>
               <ul class=" nav nav-treeview ">

               <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/messages" class="nav-link  <?php if($act =="Messages"){ echo "active";}?>">
                <i class="nav-icon ion-chatbubbles"></i>
            <p> Advice </p>
              </a>
            </li>
            <li class="nav-item ">
          <a href="<?=site_url().$refer?>/appointment"  class="nav-link <?php if($act =="Appointment"){ echo "active";}?> ">
            <i class="nav-icon fa fa-file" style="size:200px"></i>
            <p>Appointment</p>
          </a>
        </li>
              </ul> 
            </li>
            <div class="dropdown-divider"></div>
            
            <li class="nav-item <?php if( $act =='Advertisement' || $act =='composeSms' ){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
            <a href="#" class="nav-link <?php if( $act =='Advertisement' || $act =='composeSms' ){ echo "active";}?> ">
                <i class="nav-icon fa fa-folder-open"></i>
                  <p>Notes Board </p>
              </a>
               <ul class=" nav nav-treeview ">

               <li class="nav-item ">
                    <a href="<?=site_url().$refer?>/advertisement"  class="nav-link <?php if($act =="Advertisement"){ echo "active";}?> ">
                      <i class="nav-icon fa fa-signal " style="size:200px"></i>
                      <p>News</p>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="<?=site_url().$refer?>/composeSms"  class="nav-link <?php if($act =="composeSms"){ echo "active";}?> ">
                      <i class="nav-icon ion ion-volume-high " style="size:200px"></i>
                      <p>BroadCast </p>
                    </a>
                  </li>
              </ul> 
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item <?php if($act =='Payments' || $act =='Members'){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
            <a href="#" class="nav-link <?php if($act =="Payments"|| $act =='Members'){ echo "active";}?> ">
                <i class="nav-icon  fa fa-info-circle"></i>
                  <p>Account</p>
              </a>
               <ul class=" nav nav-treeview ">

               <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/members" class="nav-link  <?php if($act =="Members"){ echo "active";}?>">
                <i class="nav-icon fa fa-users"></i>
            <p> List of Members </p>
              </a>
            </li>
               <li class="nav-item ">
                    <a href="<?=site_url().$refer?>/payments"  class="nav-link <?php if($act =="Payments"){ echo "active";}?> ">
                      <i class="nav-icon ion ion-stats-bars " style="size:200px"></i>
                      <p>Others</p>
                    </a>
                  </li>
              </ul> 
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/usage" class="nav-link  <?php if($act =="Usage"){ echo "active";}?>">
                <i class="nav-icon fa fa-laptop"></i>
            <p> Usage </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            

<?php }
?>

<!-- End of Street officer sidebars -->
<!-- SUPPORTER OFFICER -->
<?php
  if($refer =='Supporter'){?>
            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/services"  class="nav-link <?php if($act =="Services"){ echo "active";}?>">
                <i class="nav-icon fas fa-university"></i>
            <p>Services</p>
              </a>
            </li>
        
            <div class="dropdown-divider"></div>

            <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/complains" class="nav-link  <?php if($act =="Complains"){ echo "active";}?>">
                <i class="nav-icon fa fa-comments"></i>
            <p> Reported Issues </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
            <a href="<?php echo site_url().$refer?>/messages"  class="nav-link <?php if($act =="Messages"){ echo "active";}?> ">
            <i class="nav-icon ion ion-chatbubble-working"></i>
            <p>Advices</p>
          </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-item">
            <a href="<?php echo site_url().$refer?>/reports"  class="nav-link <?php if($act =="Reports"){ echo "active";}?> ">
            <i class="nav-icon fa fa-signal"></i>
                  <p>Accounts</p>
          </a>
            </li>
            <div class="dropdown-divider"></div>

<?php }
?>

<!-- End of Support officer sidebars -->
<!-- ###-------------------CITIZEN-------------------###### -->
<!--  Citizen Side Bars -->
<?php
  if($refer =='Citizen'){?>
                <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/complains" class="nav-link  <?php if($act =="Complains"){ echo "active";}?>">
                <i class="nav-icon fa fa-comments"></i>
            <p> Reported Issues</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-item">
              <a href="<?php echo site_url().$refer?>/services"  class="nav-link <?php if($act =="Services"){ echo "active";}?>">
                <i class="nav-icon fas fa-university"></i>
            <p>Services</p>
              </a>
            </li>
            
            <div class="dropdown-divider"></div>
            <li class="nav-item <?php if($act =='Payments')?>">
               <a href="<?=site_url().$refer?>/payments" class="nav-link <?php if($act =="Payments"){ echo "active";}?> ">
                <i class="nav-icon fa fa-list-alt"></i>
                  <p>Account</p>
              </a>
                  </li>
                  <div class="dropdown-divider"></div>
            <li class="nav-item <?php if($act =='Messages' ||  $act == 'Appointment'){ echo 'menu-open';}else{ echo "menu-close";}?>">
  
            <a href="#" class="nav-link <?php if($act =="Messages"||$act == 'Appointment'){ echo "active";}?> ">
                <i class="nav-icon fa fa-signal"></i>
                  <p>Help Desk</p>
              </a>
               <ul class=" nav nav-treeview ">

               <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/messages" class="nav-link  <?php if($act =="Messages"){ echo "active";}?>">
                <i class="nav-iconion ion-chatbubble-working"></i>
            <p> Advice </p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="<?php echo site_url().$refer?>/appointment" class="nav-link  <?php if($act =="Appointment"){ echo "active";}?>">
                <i class="nav-iconion fa fa-file"></i>
            <p> Appointment </p>
              </a>
            </li>
  </ul>
  </li>
            
            <div class="dropdown-divider"></div>
                  <li class="nav-item <?php if($act =='News')?>">
               <a href="<?=site_url().$refer?>/news" class="nav-link <?php if($act =="News"){ echo "active";}?> ">
                <i class="nav-icon fa fa-list"></i>
                  <p>Notes Board</p>
              </a>
                  </li>
            <div class="dropdown-divider"></div>

            <li class="nav-item <?php if($act =='Usage')?>">
               <a href="<?=site_url().$refer?>/usage" class="nav-link <?php if($act =="Usage"){ echo "active";}?> ">
                <i class="nav-icon fa fa-laptop"></i>
                  <p>Usage</p>
              </a>
                  </li>
            
            <div class="dropdown-divider"></div>


<?php }
?>
<!-- End of Citizen sidebars -->

          <li class="nav-item">
              <a class="nav-link <?php if($act =="Profile"){ echo "active";}?> " href="<?=site_url().$refer?>/profile"><i class="nav-icon fas fa-user-circle" aria-hidden="true"></i>
              <p> Profile</p></a> 
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-item">
              <a class="nav-link text-bold" href="<?=site_url()?>logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>
              <p> Logout</p></a> 
            </li>
            <div class="dropdown-divider"></div>
</ul>
</div>
</aside>

<div class="content-wrapper ">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row m-2">
            
        