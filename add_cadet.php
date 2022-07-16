
<script src="assets/js/sweetalert.js"></script>
<link href="assets/css/bootstrap-select.min.css" rel="stylesheet" />

<link href="select2-develop/select2-develop/dist/css/select2.min.css" rel="stylesheet" />
<script src="select2-develop/select2-develop/dist/js/select2.min.js"></script>



<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';


if(isset
 ($_FILES['filename']['error'])   &&
 ($_POST['name'])                 &&
 ($_POST['wezipesi'])             &&
 ($_POST['hunari'])               &&
 ($_POST['welayat'])              &&
 ($_POST['etrap'])                &&
 ($_POST['bolumi'])               &&
 ($_POST['pas_num'])              &&
 ($_POST['nomer'])                &&
 ($_FILES['filename']['name'])    &&
 ($_FILES['image']['name'])       &&
 ($_POST['mohlet']) 


)
{


  sleep(0.5);
  echo '<script>
  swal({
    title: "Täze talyp goşuldy!",
    text: "",
    type: "success"
}).then(function() {
    window.location = "cadets.php";
});
</script>';


    $name=strip_tags(htmlspecialchars($_POST['name']));
    $wezipesi=strip_tags(htmlspecialchars($_POST['wezipesi']));
    $hunari=strip_tags(htmlspecialchars($_POST['hunari']));
    $welayat=strip_tags(htmlspecialchars($_POST['welayat']));
    $etrap=strip_tags(htmlspecialchars($_POST['etrap']));
    $bolumi=strip_tags(htmlspecialchars($_POST['bolumi']));
    $pas_num=strip_tags(htmlspecialchars($_POST['pas_num']));
    $nomer=strip_tags(htmlspecialchars($_POST['nomer']));
    $mohlet=strip_tags(htmlspecialchars($_POST['mohlet']));

                          //input file's
     $total = count($_FILES['filename']['name']);

     for($i=0; $i<$total; $i++) {


    $file_path=strip_tags(htmlspecialchars($_FILES['filename']['name'][$i]));

    $destination='ARHIW/Talyp arhiwi/' .strip_tags(htmlspecialchars($_FILES['filename']['name'][$i]));

      move_uploaded_file($_FILES['filename']['tmp_name'][$i], $destination);

                            //input img's
    $img_path=strip_tags(htmlspecialchars($_FILES['image']['name']));

    $img='ARHIW/Suratlar/'.strip_tags(htmlspecialchars($_FILES['image']['name']));

      move_uploaded_file($_FILES['image']['tmp_name'], $img);

   

   

        mysql_query("INSERT INTO cadet ( 

                                             name,
                                             wezipesi,
                                             hunari,
                                             welayat,
                                             etrap,                                           
                                             bolumi,
                                             pas_num,
                                             nomer,
                                             document,
                                             file_path,
                                             img,
                                             img_path,
                                             mohlet
                                           
                                           ) 

                                          VALUES (

                                                  '$name',
                                                  '$wezipesi',
                                                  '$hunari',
                                                  '$welayat',
                                                  '$etrap',
                                                  '$bolumi',
                                                  '$pas_num',
                                                  '$nomer',
                                                  '$destination',
                                                  '$file_path',
                                                  '$img',
                                                  '$img_path',
                                                  '$mohlet'
                                                 
                                          
                                                  )
                                                 ");      

   

 }
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
       <li class="nav-item active">
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
      <li class="nav-item active">
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
<div id="timedisplay" style="margin-top: 7%; background : lightgreen; "></div> &nbsp   

           
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <p><h1 class="h3 mb-2 text-gray-800"></h1></p>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Täze talyp goşmak</h4>
            </div>
            <div class="card-body">

                 <!-- Text input -->
    <form method="POST" action="add_cadet.php" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>
              <!-- Form Name -->


      <!-- Select Basic -->
     
           
                  <!-- Text input-->
<div class="form-group"> <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">F.A.A.a</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" placeholder="">
                </div>
              </div>
                            </div> 

         
    


 <!-- Select Basic -->
     <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Saklaýan bölümi:</label>
                  <span class="input-group-addon"><i class="fas fa-address-card" aria-hidden="true"></i></span> 
                   
          <select name="bolumi"  class="form-control" style="height: 40px;"><option> </option>
           <?php
        $sql=mysql_query("SELECT * FROM bolum");
       
        while($row=mysql_fetch_assoc($sql)){
         
          print '<option value="'.$row['id'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
        </div>
      </div>
      </div>


            <!-- Select Basic -->
      <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Wezipesi:</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="wezipesi"  class="form-control" style="height: 40px;"><option> </option>
           <?php
        $sql=mysql_query("SELECT * FROM wezipe");
       
        while($row=mysql_fetch_assoc($sql)){
         
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
        </div>
      </div>
      </div>


      <!-- Select Basic -->
      <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Hünäri:</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="hunari"  class="form-control" style="height: 40px;"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM hunar");
       
        while($row=mysql_fetch_assoc($sql1)){
           
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
        </div>
      </div>
      </div>

         <!-- Select Basic -->
     <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Welaýaty:</label>
                  <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                   
          <select name="welayat"  class="form-control" style="height: 40px;"><option > </option>
           <?php
        $sql1=mysql_query("SELECT * FROM welayat ");
       
        while($row=mysql_fetch_assoc($sql1)){
          
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
        </div>
      </div>
      </div>

              <!-- Select Basic -->
      <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Etraby:</label>
                  <span class="input-group-addon"><i class="fa fa-street-view " aria-hidden="true"></i></span>
                   
          <select name="etrap"  class="form-control" style="height: 40px;"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM etrap");
       
        while($row=mysql_fetch_assoc($sql1)){
         
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
        </div>
      </div>
      </div>

                      <!-- Text input-->
<div class="form-group"> <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">Passport belgisi</label>
                  <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="pas_num" id="pas_num" placeholder="">
                </div>
              </div>
                            </div> 


                  <!-- Text input-->
<div class="form-group"> 
  <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">Telefon belgisi</label>
                  <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="nomer" id="nomer" placeholder="">
                </div>
              </div>
            </div> 


                    <!-- Text input-->

      <div class="form-group">
        <div class="col-md-10 col-sm-10">
          <div class="input-group">
            <label class="col-md-4 control-label" for="selectbasic" >Möhlet</label>  
            <span class="input-group-addon"><i class="fa fa-calendar-check" aria-hidden="true"></i></span>
            <input name="mohlet" id="mohlet"  type="date"  class="form-control" > 
        </div>
      </div>
   </div>



                     <!-- Input document -->

      <div class="container">
         <div class="row">
      <label> Fail yuklemek  <input type="file" name="filename[]" id="filename" size="10" multiple="multiple"> </label>

    </div>
  </div>       


                  <!-- Input img -->

      <div class="container">
         <div class="row">
     <label> Surat yuklemek <input type="file" name="image" id="image" size="10" multiple="multiple"> </label>

    </div>
  </div>       

        <!-- Button (Double) -->
      <div class="form-group">
  <label class="col-md-4 control-label" for="btn_registrar"></label>
  <div class="col-md-8">
    <input type="submit" id="btn_registrar" name="btn_registrar" class="btn btn-success" value="REGISTRASIÝA"/>
    <a href="cadets.php"><input type="button" id="btn_cancelar" name="btn_cancelar"  onclick="goBack()"class="btn btn-danger" value="YZA"/> </a>
  </div>
</div>

</fieldset>
</form>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                   
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

 
 <?php
 require_once './blocks/html_sony.php'?>
  