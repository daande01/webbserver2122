<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting( E_ALL);
header('Content-Type:text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
mb_http_output( 'UTF-8');

require "controller/controller_startpage.php";
require "model/model_startpage.php";
require "view/page/startbottom.php";
require "view/view_startpage.php";


$url="http://localhost". $_SERVER['REQUEST_URI'];
$arrurl=parse_url($url);
echo "<br><br>";
//var_dump($arrurl);
$url_parts=explode('/', $arrurl['path']);
//var_dump($url_parts);


if($url_parts[3]=="index"){
  
  $model = new Model_startpage();
    $view  = new view_startpage();
  $controller = new controller_startpage($model,$view);

  
  if($_GET["märke"]=="volvo"){
    $controller->showVolvo();
    
  }if($_GET["märke"]=="saab"){
    $controller->showSaab();
  }
  
  
  
}






 ?>