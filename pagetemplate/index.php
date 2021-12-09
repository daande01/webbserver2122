<?php 
require "top.php";
require "nav.php";
require "start_.php";
require "bottom.php";
require "omoss_.php";
$url="http://localhost". $_SERVER['REQUEST_URI'];
//echo $url;
$arrurl=parse_url($url);
echo "<br><br>";
//var_dump($arrurl);
$url_parts=explode('/', $arrurl['path']);
//var_dump($url_parts);


if($url_parts[3]==null || $url_parts[3]=="start" ){
  top();
  nav();
  start();
 bottom();
}
if($url_parts[3]=="omoss" ){
  top();
  nav();
  omoss();
 bottom();
}
if($url_parts[3]=="support" ){
  top();
  nav();
  start();
 bottom();
}

 ?>