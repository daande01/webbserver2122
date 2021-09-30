<?php 
require_once('dbcon.php');


$delete_pk=filter_input(INPUT_GET,'cartartikel_pk',FILTER_SANITIZE_NUMBER_INT);

//DELETE FROM employees WHERE officeCode = 4;

$data=[ 'del_pk' =>$delete_pk];


$db=new dbcon();
$stmt=$db->pdo->prepare('DELETE FROM cartartikel where cartartikel_pk= :del_pk');
$stmt->execute($data);







 ?>