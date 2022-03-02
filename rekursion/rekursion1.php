

<?php

function subtract($x){
  
  $x--;
  
  echo $x."<br>";
  if ($x<=0){
    
    return $x;
  }
  
  subtract($x);
}

subtract(100);





  ?>