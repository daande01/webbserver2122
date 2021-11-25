<?php
session_start();

if(isset($_SESSION["username"])){
  
  echo"du läser hemlig information. välkommen ".$_SESSION["username"];
  
  echo '<a href="logout.php"> logout</a>';
  
  
}else{
  
  header('Location:index.php');
}









  ?>