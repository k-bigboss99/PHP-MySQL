<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body> 
    <?php
      class MyMath 
	  {
        public static function Cubic($X) 
	    {
          return $X * $X * $X;
        }
      }  
	
      echo '5的三次方為'.MyMath::Cubic('5');
    ?> 
  </body>
</html>
