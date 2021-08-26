<?php 

$val="klicka här";
echo <<<FORM
 
 <form action="validateform.php" method="get">
  <input type="text" name="surname" value="ange ditt namn">
  <input type="submit" name="subtextform" value="{$val}">
  
</form>

FORM;
?>