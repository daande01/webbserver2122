<?php 

class view_startpage
{

private $startbottom;

  function __construct()
  {
    $this->startbottom= new startbottom();
    
  }
  
  function render($arr){
    
    $this->startbottom->top();
    
    foreach ($arr as $key => $value) {
    echo "<h1>".$key." :". $value."</h1>"  ;
    }
    
    $this->startbottom->bottom();
    
  }
  
  
}




 ?>