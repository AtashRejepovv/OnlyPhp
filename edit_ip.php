<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';

//delete accaunt
 if(isset($_GET['ide'])){
   $id=$_GET['ide'];
   mysql_query("DELETE FROM log WHERE id= '$id'");

 }

?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-file-archive"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Archive <sup>code</sup></div>
      </a>

          <?php if($_SESSION['role_id']==0 or $_SESSION['role_id']==1):{ ?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
      <li class="nav-item  ">
        <a class="nav-link" href="index.php">
        <i class="fas fa-home"></i>
          <span>BAŞ SAHYPA</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       
      </div>

 <!-- Nav Item - Charts -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="far fa-file-archive"></i>
          <span>ARHIWLER</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ARHIW:</h6>
            <a class="collapse-item" href="cadets.php">Talyplar arhiwi</a>
             <a class="collapse-item" href="teacher.php">Mugallymlar arhiwi</a>
           
          </div>
        </div>
      </li>
      
    
   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-lock"></i>
          <span>LOG</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">IP Screens:</h6>
            <a class="collapse-item" href="edit_ip.php">Giren ulanyjy</a>
            <a class="collapse-item" href="">Register</a>
            
           
        </div>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      
      </div>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="sazlama.php">
         <i class="fas fa-cog fa-spin"></i>
          <span>SAZLAMALAR</span>
        </a>
      </li>

     <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="admin.php">
         <i class="fas fa-cog fa-spin"></i>
          <span>ADMIN IŞLERI</span>
        </a>
      </li>

       <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>ÇYKMAK</span></a>
      </li>

     
 <!-- Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-paste"></i>
          <span>Registrasiya dokumenta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Arhiwi gosmak:</h6>
            <a class="collapse-item" href="add_cadet.php">Talyp arhiwi</a>
            <a class="collapse-item" href="add_teacher.php">Mugallym arhiwi</a>
            
          </div>
        </div>
      </li>-->

      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
          <?php }endif;?>

          <?php if($_SESSION['role_id']==2):{?>


                
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
        <i class="fas fa-home"></i>
          <span>BAŞ SAHYPA</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       
      </div>

 <!-- Nav Item - Charts -->
       <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="far fa-file-archive"></i>
          <span>Arhiwler</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Arhiw:</h6>
            <a class="collapse-item" href="cadets.php">Talyplar arhiwi</a>
             <a class="collapse-item" href="teacher.php">Mugallymlar arhiwi</a>
           
          </div>
        </div>
      </li>
     
       

    
     <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-lock"></i>
          <span>LOG</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">IP Screens:</h6>
            <a class="collapse-item" href="edit_ip.php">Giren ulanyjy</a>
           
            
           
        </div>
      </li>

         <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>ÇYKMAK</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      
      </div>

      

     
    

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> <?php }endif;?>
                
                </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


             <li class="nav-item dropdown no-arrow" style="margin-top: 7%;">

             <i class="fa fa-users"></i> &nbsp 
                   <?php print $_SESSION['type'];print " : ".$_SESSION['name'];?></li> &nbsp &nbsp

                   <script>
function getDate()
{
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    //По надобности условие ниже повторить с minutes и hours
    if(seconds < 10)
    {
        seconds = '0' + seconds;
    }
    document.getElementById('timedisplay').innerHTML = hours + ':' + minutes + ':' + seconds;
}
setInterval(getDate, 0);
</script>
<div id="timedisplay" style="margin-top: 7%; background-color: lightgreen; height: 4%; "></div> &nbsp   

           
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
             <br> <br> <br>

         

             <!-- Admin ahli zat etyar!!! -->
             
 <?php if($_SESSION['role_id']==0 or $_SESSION['role_id']==1):{ ?>
          <!-- DataTales Example -->
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Hasaba alyş sahypa</h3>
             
            </div>


           
              <div class="card-body">
              <div class="table-responsive"    style="margin-top: 1%;">
       <table id="datatable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

  <thead>
    <tr>
      <th class="th-sm">Id</th>     
      <th class="th-sm">F.A.A.a</th> 
      <th class="th-sm">Login</th>
      <th class="th-sm">Ip salgysy</th>  
      <th class="th-sm">Senesi</th> 
      <th class="th-sm">Görnüşi</th>  
      
  
  

     
       <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 275px;">
                            <center>
                           <em class="fa fa-cog"></em>
                           </center>
                         </th>    
    </tr>
  </thead>
  <tbody>
   
    
                      <?php

                          $sql=mysql_query("SELECT * FROM log ");
                          while($row=mysql_fetch_assoc($sql)){

                              print '<tr>';
                              print '<td>'.$row['id'].'</td>';
                              print '<td>'.$row['user'].'</td>';
                              print '<td>'.$row['login'].'</td>';
                              print '<td>'.$row['ip'].'</td>';
                              print '<td>'.$row['date'].'</td>';

                              if($row['log_in_out']==1) $log  =  'GIRDI <i style="color:green" class="fas fa-sign-out-alt"></i>';
                                else $log = 'ÇYKDY <i style="color:red" class="fas fa-sign-out-alt"></i>';

                              print '<td>'.$log.'</td>';
                             
                      ?>

                       <td align="center">
                              
                               <a title="udalit etmek" onclick="return confirm('DELETE?')" href="edit_ip.php?ide=<?=$row['id']?>"  class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                
                            </td>

                            <?php
                      print '</tr>';
                      
                      }
                                
                       ?>  

     <?php }endif;?>


                    <!-- Operator dine goryar!!! -->

        <?php if($_SESSION['role_id']==2):{ ?>
          <!-- DataTales Example -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Hasaba alyş sahypa</h3>
             
            </div>


           
              <div class="card-body">
              <div class="table-responsive"    style="margin-top: 1%;">
       <table id="datatable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

  <thead>
    <tr>
      <th class="th-sm">Id</th>     
      <th class="th-sm">F.A.A.a</th> 
      <th class="th-sm">Login</th>
      <th class="th-sm">Ip salgysy</th>  
      <th class="th-sm">Senesi</th> 
      <th class="th-sm">Görnüşi</th>  
      
  
  

     
       <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 275px;">
                            <center>
                           <em class="fa fa-cog"></em>
                           </center>
                         </th>    
    </tr>
  </thead>
  <tbody>
   
    <?php

                          $sql=mysql_query("SELECT * FROM log ");
                          while($row=mysql_fetch_assoc($sql)){

                              print '<tr>';
                              print '<td>'.$row['id'].'</td>';
                              print '<td>'.$row['user'].'</td>';
                              print '<td>'.$row['login'].'</td>';
                              print '<td>'.$row['ip'].'</td>';
                              print '<td>'.$row['date'].'</td>';

                              if($row['log_in_out']==1) $log  =  'GIRDI <i style="color:green" class="fas fa-sign-out-alt"></i>';
                                else $log = 'ÇYKDY <i style="color:red" class="fas fa-sign-out-alt"></i>';

                              print '<td>'.$log.'</td>';
                             
                      ?>
                       <td align="center">
                              
                               <a title="udalit etmek" onclick="return confirm('DELETE?')" href=""  class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                
                            </td>

                            <?php
                      print '</tr>';
                      
                      }
                                
                       ?>  

     <?php }endif;?>



  </tfoot>
</table>
 

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  <?php require_once './blocks/html_sony.php'?>
