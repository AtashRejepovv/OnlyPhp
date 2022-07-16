<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';

//delete accaunt
 if(isset($_GET['ide'])){
 	 $id=$_GET['ide'];
 	 mysql_query("DELETE FROM users WHERE id= '$id'");

 }

 if (isset($_GET['blok'])) {
       $blok=$_GET['blok'];
       mysql_query("UPDATE  users set status=0 WHERE id= '$blok'");

 }

if (isset($_GET['ac'])) {
       $ac=$_GET['ac'];
       mysql_query("UPDATE users set status=1  WHERE id= '$ac'");

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
      <li class="nav-item">
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
      <li class="nav-item active">
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

                  <p> Sizin hakynyz yok! </p>
                </div <?php }endif;?>
          }

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

             <i class="fa fa-users"></i>&nbsp 
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

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Ulanyjylar sahypasy</h3>
               <div class="col col-xs-6 text-right" > 
                 
                  <a title="Ulanjy goşmak" href="user_gosh.php" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-user-plus "></i>
                    </span>
                   
                  </a>

                  
               </div>
            </div>


              
              <div class="card-body" >
              <div class="table-responsive" style="margin-top: 1%;">
       <table id="datatable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

  <thead>
                   <tr>
                         <th class="hidden-xs">ID</th>
                         <th>Ady</th>
                         <th>Role</th>
                         <th>Status</th>
                         <th>Bölümi</th>
                          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 275px;">
                            <center>
                           <em class="fa fa-cog"></em>
                           </center>
                         </th>    
    </tr>
                 </thead>
                 <tbody>

                  <?php 
                   $role=$_SESSION['role_id'];

                       $sql=mysql_query("SELECT * FROM users WHERE role_id>'$role'");
 
  while($row=mysql_fetch_assoc($sql)){
    print '<tr>';
    print '<td >'.$row['id'].'</td>';
    print '<td><a href="profil_oper.php?id='.$row['id'].'"> '.$row['name'].'</a></td>';

            if ($row['role_id']==1) $r="Admin"; elseif ($row['role_id']==2) $r="Operator";
    print '<td> <i class="fa fa-spinner  fa-spin"></i>'.$r.'</td>';
    
    
        
        if($row['status']==1) $st='<i style="color:green" class="fa fa-check-circle fa-lg"></i>'; else $st='<i style="color:red" class="fa fa-check-circle fa-lg"></i>';
	print '<td>'.$st.'</td>';

           if($row['bolum_id']==1) $bm= " Gizlin";  elseif($row['bolum_id']==2)  $bm= " Has gizlin"; 
             
        print '<td> <i class="fas fa-address-card"></i>'.$bm.'</td>';           	   
?>



		

    <td align="center">
                              
                               <a title="Üýtgetmek" class="btn btn-outline-info" href="edit_profile.php?id=<?=$row['id']?>"><i class="fas fa-pencil-alt"></i></a>
                               <a title="udalit etmek" onclick="return confirm('DELETE?')" href="admin.php?ide=<?=$row['id']?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                               <a title="blok etmek" onclick="return confirm('BLOK?')" href="admin.php?blok=<?=$row['id']?>" class="btn btn-outline-warning"><i class="fas fa-eye-slash"></i></a>
                               <a title="blok acmak" onclick="return confirm('OPEN?')" href="admin.php?ac=<?=$row['id']?>" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                            </td>



<?php
    print '</tr>';
    
    }
                                
             ?>  


                 </tbody>
                </table>


              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


 <?php require_once './blocks/html_sony.php'?>