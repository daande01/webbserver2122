<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $username  =filter_input(INPUT_GET, 'name',FILTER_SANITIZE_SPECIAL_CHARS);
  //echo $username;

  
require_once('dbconnect.php');
$db=new dbconnect();

$data = [
      'user' =>   $username,
    
];
$sql = "INSERT INTO users (username) VALUES (:user)";

//echo $sql;
$stmt= $db->pdo->prepare($sql);
$stmt->execute($data);


echo "<div class=\"newuser\">".$stmt->rowCount()."</div>";

?>