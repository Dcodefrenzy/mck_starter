<?php
unset($_SESSION['id']);
session_destroy();

if(isset($_SERVER['HTTP_REFERER'])){
  header("Location:".$_SERVER['HTTP_REFERER']);
}else{
  header("Location:/index");
}



 ?>
