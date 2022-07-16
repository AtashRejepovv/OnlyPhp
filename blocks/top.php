
<?php 
$r=0;
$resul= mysql_query("SELECT * FROM pays_log");
    while($row=mysql_fetch_assoc($resul))
{

  if($row['status2']==0){
$r=$r+1;
}}

      ?>
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <?php 
                     if($_SESSION['role_id']==2):{ 
                       $dom_upra=$_SESSION['dom_upravleniye'];
                    
                     $sql=mysql_query("SELECT * FROM dom_upravleniya WHERE id_uprav='$dom_upra'");
 
                    $row=mysql_fetch_assoc($sql);
                     
                    print $row['ady'];
                    }endif;?></a>
                     <div class="collapse navbar-collapse">
                   </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                      <li>
                         
                            <a style="font-size: 1em; color:red" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i style="font-size: 1.4em; color:red" class="ti-bell ">
                                  
                                </i> 
               <?php print $r ?>
                
                            </a>
                        </li>


                         <li>
                         
                            <a style="font-size: 1.5em; color:#140e03" href="#" class="dropdown-toggle" data-toggle="dropdown">
                              
                <span><?php print $_SESSION['type'];print " : ".$_SESSION['name'];?></span>
                
                            </a>
                        </li>


                          <li>
                            <a href="logout.php">
								<i style="color: red;" class="ti-new-window"></i>
								
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>