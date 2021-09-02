<?php 

$val="klicka här";

echo <<<FORM
 
<form action="validateform.php" method="get">
  <input type="text" name="surname" value="ange ditt namn">
  <input type="submit" name="subtextform" value="{$val}">
  <br><br>
  dog <input type="radio" name="animals" value="dog" checked>
  cat <input type="radio" name="animals" value="cat">
  
</form>

FORM;

?>