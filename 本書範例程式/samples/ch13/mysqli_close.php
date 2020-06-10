<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>關閉資料連接</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword") or die("無法建立資料連接");
      echo "成功建立資料連接";
      mysqli_close($link);
    ?> 
  </body>
</html>