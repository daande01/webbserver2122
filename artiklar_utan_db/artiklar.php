<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
<?php

$artiklar = [
          ["rubrik"=>"Lamborghini", "pris"=>800000,"bild"=>"lambo.jpg","beskrivning" => "skit traktor" ],
          ["rubrik"=>"new Holland", "pris"=>1000000,"bild"=>"holland.jpg","beskrivning" => "en fin traktor till ett attraktivt pris" ],
          ["rubrik"=>"john deere", "pris"=>2000000,"bild"=>"deere.jpg","beskrivning" => "fin fin" ],
          ["rubrik"=>"massey ferguson", "pris"=>1000000,"bild"=>"mf.jpg","beskrivning" => "bäst" ],
          ];



for ($i=0; $i < sizeof( $artiklar ); $i++) {

echo <<<ARTIKEL
{$artiklar[$i]['rubrik']}<br>

<img src="bilder/{$artiklar[$i]['bild']}"


ARTIKEL;
}

foreach ($artiklar  as $artikel) {

echo $artikel['beskrivning']."<br>"; 

}



?>



</body>
</html>
