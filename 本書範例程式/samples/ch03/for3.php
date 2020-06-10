<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $result = 1;
      for ($i = 1; $i <= 10; $i++)
        $result = $result * $i; 			//也可以寫成$result *= $i;
      echo '1到10的階乘為'.$result;
    ?>
  </body>
</html>
