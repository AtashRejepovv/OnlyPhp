<?php  
session_start();
if(empty($_SESSION['login']) and empty($_SESSION['password'])){
  header('Location: ./logout.php');  

}

?>
