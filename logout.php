<?php
session_start();
require_once'./blocks/mysql.php';

if(!empty($_SESSION['login'])){

 $ip=$_SERVER['REMOTE_ADDR'];
   $user=$_SESSION['name'];
   $login=$_SESSION['login'];
 $role_id=$_SESSION['role_id'];
   mysql_query("insert into log (ip, user, login, role_id, log_in_out) values ('$ip','$user', '$login', '$role_id','2')"); //cykdy

}

unset($_SESSION['login']);
unset($_SESSION['password']);
session_destroy();
header('Location: login.php');
?>