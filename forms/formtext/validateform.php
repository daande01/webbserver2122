
<body style ="color:white; background-color:black;">
<?php 


if(isset($_GET['animals'])){
  $animals= $_GET['animals'];
  echo htmlspecialchars($animals,ENT_QUOTES);
}



$username_clean = filter_input(INPUT_GET, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
//$animals = filter_input(INPUT_GET, 'animals', FILTER_SANITIZE_SPECIAL_CHARS);


//echo htmlspecialchars($username_dirty,ENT_QUOTES)."<br>";
for ($i=0; $i < 10; $i++) {
echo $username_clean;
}



 ?>
 
 <body>