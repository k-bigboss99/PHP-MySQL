<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $file = scandir("C:\\AppServ", 1);
      foreach($file as $value)
        if ($value != "." && $value != "..") echo $value . " " . "<br>";
    ?> 
  </body>
</html>
