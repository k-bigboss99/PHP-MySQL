<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
	  $sum = 0;
      for ($i = 2; $i <= 100; $i+=2)
        $sum = $sum + $i; 			//也可以寫成$sum += $i;
      echo '2到100之間所有偶數的總和為'.$sum;
    ?>
  </body>
</html>
