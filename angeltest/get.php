<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('dbconnect.php');
$db=new dbconnect();


$sql = "select * from users";

echo $sql;
$stmt= $db->pdo->prepare($sql);
$stmt->execute();

foreach($stmt as $row) {
  echo "<div class=\"newuser\">".$row['username']."</div>";
    
}




?>