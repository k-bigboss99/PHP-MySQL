<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      // 將圓周率PI定義為常數
      define("PI", 3.14);
      // 將半徑設定為10
      $radius = 10;
	  // 計算圓面積
	  $area = PI * $radius * $radius;
      // 印出圓面積
      echo $area;
    ?> 
  </body>
</html>
