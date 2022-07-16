<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';
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

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
      <li class="nav-item">
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


          <!-- Page Heading      su yerede baslayar!  -->   
            <div class="content">
            <div class="container-fluid">
                <div class="row">
               
                <div class="container">
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
         


             <div class="panel panel-info" style="margin-top: 23%;
              margin-left:28%;    border: solid; border-width: 1px; 
              width: 130%;

             border-color: lightblue;">
            <div class="panel-heading" style="border: solid; border-width: 1px; border-color: lightblue; background-color: lightblue; color: white">
              <center> <h3 class="panel-title">Akkaunt</h3></center>
            </div>
            <div class="panel-body" style=" width: 135%;"  >
              <div class="row" >

                <?php 
               $id=$_GET['id'];
                $sql=mysql_query("SELECT * FROM users WHERE id='$id'");

              $row=mysql_fetch_assoc($sql);?>
                   <div class=" col-md-9 col-lg-9 " > 
                  <table class="table table-user-information" >
                    <tbody>
                      <tr>
                        <td>Id:</td>
                        <td><?=$row['id']?></td>
                      </tr>
                      <tr>
                        <td>Ady:</td>
                        <td><?=$row['name']?></td>
                      </tr>
                      <tr>
                        <td>Login:</td>
                        <td><?=$row['login']?></td>
                      </tr>
                       <tr>
                        <td>Parol:</td>
                        <td><?=$row['password']?></td>
                      </tr>
                       <tr>
                        <td>Hünäri:</td>
                        <td><?=$row['hunari']?></td>
                      </tr>
                      <tr>
                        <td>Welaýaty:</td>
                        <td><?=$row['welayat']?></td>
                      </tr>

                     

               <tr><td>
               
              <a  class="btn btn-outline-info"  data-toggle="tooltip" title="Yza gaýtmak" href="admin.php"><i class="fa fa-arrow-circle-left"></i>
                   
                  </a></td>
                
               
<td>
               <a  class="btn btn-outline-warning" style="margin-left: 540px"   data-toggle="tooltip" title="Üýtgetmek" href="edit_profile.php?id=<?=$row['id']?>">
                   <i class="fas fa-pencil-alt"></i>
                  </a>

</td></tr>
                </tbody>
                  </table>



                </div>
              </div>

            </div>
               
            
          </div>
        </div>
      </div>
    </div>
                 
                 </div>
               </div>
             </div>

        </div>
      </div>




         <!-- End of Main Content -->




      <!-- Footer -->
      
      <!-- End of Footer -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <?php
 require_once './blocks/html_sony.php'?>
 
