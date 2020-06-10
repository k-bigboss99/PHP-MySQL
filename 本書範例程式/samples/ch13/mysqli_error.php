<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>顯示錯誤代碼及訊息</title>
  </head>
  <body>
    <?php
      $link = @mysqli_connect("localhost", "root", "mypassword1")
			  or die("無法建立資料連接: " . mysqli_connect_errno() . " " . mysqli_connect_error());
      echo "成功建立資料連接";
      mysqli_close($link);
    ?> 
  </body>
</html>