<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';

if ($_POST['login'] and $_POST['password']){

	  $login=$_POST['login'];
	  $password=$_POST['password'];
	  $sql= mysql_query("SELECT * FROM users where login='$login' and password='$password'");
      while ($result=mysql_fetch_assoc($sql)) {

      	if($result['login']==$login and $result['password']==$password){

      		$_SESSION['id']=$result['id'];
      		$_SESSION['name']=$result['name'];
			$_SESSION['login']=$result['login'];
			$_SESSION['password']=$result['password'];
			$_SESSION['role_id']=$result['role_id'];
			$_SESSION['status']=$result['status'];
			$_SESSION['bolum_id']=$result['bolum_id'];
			$_SESSION['hunari']=$result['hunari'];

	if ($_SESSION['status']>0){
	if ($result['role_id']==0)
	$_SESSION['type']='Root'; 
	else if ($result['role_id']==1)
	{$_SESSION['type']='Admin';}
	else if ($result['role_id']==2)
	{$_SESSION['type']='Operator';}

		//  ulanyjy hasaplaya 

if(!empty($_SESSION['login'])){
   $ip=$_SERVER['REMOTE_ADDR'];
   $user=$_SESSION['name'];
   $login=$_SESSION['login'];
   $role_id=$_SESSION['role_id'];

   mysql_query("insert into log (ip, user, login, role_id, log_in_out) values ('$ip','$user', '$login', '$role_id','1')");} //girdi
       
       header("Location: index.php");}
}else{
  header("Location: ./login.php");  
}
}

}
    if($_SESSION['login']==true and $_SESSION['password']==true){
$ip=$_SERVER['REMOTE_ADDR'];
 $user=$_SESSION['username']." (id: ".$_SESSION['login'].")";
 
 $role_id=$_SESSION['role_id'];
 $query=mysql_query("insert into site_login (ip, user, role_id, log_in_out) values ('$ip','$user','$role_id','log_in')");
 }	else{

    $ip=$_SERVER['REMOTE_ADDR'];
 $user=$login;
 $query=mysql_query("insert into site_login (ip, user, log_in_out) values ('$ip','$user','access_denied')");
 } 

 