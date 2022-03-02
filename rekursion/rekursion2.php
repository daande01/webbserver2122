<?php

function summa($x){
  
  $sum;
  
  if ($x==1){  
    $sum = 1;
  }else{
    
    $sum=$x+summa($x-1);
    
  }
  return $sum;
}

echo summa(2);





  ?>