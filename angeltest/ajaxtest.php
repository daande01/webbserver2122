
<?php 











 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     
     <button id="knapp">
       hämta med ajax
     </button>
     <input type="text" id="textinput" name="text" value="">
     
     
     <div id="text">
       
       
       
     </div>
     
     <div id="text2">
       
       
       
     </div>
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
       
  $("#knapp").click(function(){
         
         console.log("test");
         
     $.get( "insert.php", { name: $('#textinput').val() } )
     .done(function( data ) {
          $( "#text" ).html( "Name: " + data+"text" )
    
          
          $.get( "get.php" )
          .done(function( data ) {
               $( "#text2" ).html(  data )
         
               
         
           });
          
          
    
      });
      
    });

       
       
       
     </script>
   </body>
 </html>