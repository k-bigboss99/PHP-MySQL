<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $size = getimagesize("images/osaka7.jpg");
      echo "圖形寬度：$size[0]<br>";
      echo "圖形高度：$size[1]<br>";
      echo "圖形格式：$size[2]<br>";            
      echo "圖形長寬字串：$size[3]";      
    ?>
  </body>
</html>
