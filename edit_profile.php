<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';

$id=$_GET['id'];
if (isset
($_POST['name']) &&
($_POST['login']) &&
($_POST['password']) &&
($_POST['hunari'])  &&
($_POST['welayat']) &&
($_POST['etrap']) 

)

{  

    $name=strip_tags(htmlspecialchars($_POST['name']));
    $login=strip_tags(htmlspecialchars($_POST['login']));
    $password=strip_tags(htmlspecialchars($_POST['password']));
    $hunari=strip_tags(htmlspecialchars($_POST['hunari']));
    $welayat=strip_tags(htmlspecialchars($_POST['welayat']));
    $etrap=strip_tags(htmlspecialchars($_POST['etrap']));
    
    

         mysql_query ("UPDATE  users     SET              name ='$name',
                                                          login = '$login',
                                                          password = '$password',
                                                          hunari = '$hunari',
                                                          welayat = '$welayat',
                                                          etrap = '$etrap'
                                                          


                                                  
                                         
                                        
                                         WHERE id='$id' ");
    

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
     
 <!-- Nav Item - Utilities Collapse Menu       <li class="nav-item">
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
      </div> <?php }endif;?>


        <?php if($_SESSION['role_id']==2):{ ?>
    <p> Sizin hakynyz yok!</p>
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
        <div class="container-fluid" style="margin-top: 5%; width: 90%">

          
                 <div class="card">   
          <!-- Page Heading      su yerede baslayar!  -->   

          <?php
              
              $sql=mysql_query("SELECT * FROM users WHERE id='$id'");

            $row=mysql_fetch_assoc($sql); ?>

     
        <div class="container" style="margin-top: 20px;" >
    <h1> Maglumaty üýtgetmek</h1>
    <hr>
  <div class="row">
 <div class="col-md-9 personal-info">

        <form method=POST action="edit_profile.php?id=<?=$row['id']?>" id="tab">
      <div class="form-group">
          <label style="color:black" class="col-lg-3 control-label" >Ady</label>
            <div class="col-lg-8">
            <input type="text" name="name" value="<?=$row['name']?>" class="form-control">
               </div>
          </div>
           <div class="form-group">
          <label style="color:black" class="col-lg-3 control-label">Login</label>
               <div class="col-lg-8">
            <input type="text" name="login" value="<?=$row['login']?>" class="form-control"> 
              </div>
            </div>
          <div class="form-group">
            <label style="color:black" class="col-lg-3 control-label">Parol</label>
                <div class="col-lg-8"> 
            <input type="text" name="password" value="<?=$row['password']?>" class="form-control">
              </div>
            </div>
             <div class="form-group">
          <label style="color:black" class="col-lg-3 control-label">Hünäri</label>
             <div class="col-lg-8">
            <input type="text" name="hunari" value="<?=$row['hunari']?>" class="form-control">
              </div>
            </div>
             <div class="form-group">
          <label style="color:black" class="col-lg-3 control-label">Welaýaty</label>
               <div class="col-lg-8">
            <input type="text" name="welayat" value="<?=$row['welayat']?>" class="form-control">
              </div>
            </div>
             <div class="form-group">
          <label style="color:black" class="col-lg-3 control-label">Etraby</label>
              <div class="col-lg-8">
            <input type="text" name="etrap" value="<?=$row['etrap']?>" class="form-control">
                </div>
              </div>
              
         <div class="form-group">
            <label style="color:black" class="col-md-3 control-label"></label>
            <div class="col-md-8">
             


                 
<a class="btn btn-outline-info" data-toggle="tooltip" title="Yza gaýtmak" href="admin.php"><i class="fa fa-arrow-circle-left"></i>
                   
                  </a> <input type="submit" name="sub" class="btn btn-outline-info" value="Ýatda sakla"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
         <!-- End of Main Content -->




      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <?php
 require_once './blocks/html_sony.php'?>