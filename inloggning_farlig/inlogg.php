<?php
session_start();
require('dbconnect.php');

$dbcon=new dbcon();
//filter input
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
// sql injections lösning skickar farlig data i separat array
$sql= "select * from users where username ='".$user."' and password ='".$pass."'  ";

echo $sql;

$stmt=$dbcon->pdo->query($sql);

$stmt->execute();
//   hash password and validate   https://www.php.net/manual/en/function.password-verify.php
if($stmt->fetch()){
  
  $_SESSION["username"]=$user;
  echo "inloggad";
  header('Location:inloggad.php');
}else{
  
  header('Location:index.php');
}



  ?>