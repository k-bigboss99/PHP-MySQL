<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
  </head>
  <body>
    <?php
      function tour(...$cities)
      {  
	    foreach ($cities as $value) 
	      echo $value.'<br>';
      }
       
      tour('台北', '台中', '高雄');
    ?>
  </body>
</html>
