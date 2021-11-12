<?php
session_start();

if(isset($_SESSION["username"])){
  
  echo"du läser hemlig information. välkommen ".$_SESSION["username"];
  
  
  
  
}else{
  
  header('Location:index.php');
}









  ?>