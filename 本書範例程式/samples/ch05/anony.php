<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $greet = function($name)
      {
        printf("Hello %s\r\n", $name);
      };

      $greet("World!");
      $greet("PHP!");
    ?> 
  </body>
</html>  