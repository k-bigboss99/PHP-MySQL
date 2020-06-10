<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      for ($i = 1; $i <= 15; $i++)
      {
        if ($i <= 10) continue;
        echo $i.'<br>';
      }
    ?> 
  </body>
</html>
