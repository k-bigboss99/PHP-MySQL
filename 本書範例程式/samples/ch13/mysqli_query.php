<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>執行 SELECT 指令</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword")
        or die("無法建立資料連接: " . mysqli_connect_error());
		
      mysqli_select_db($link, "product")
        or die ("無法開啟 prodcut 資料庫<br>" . mysqli_error($link));
		
      $sql = "SELECT * FROM price WHERE category = '主機板'";
      $result = mysqli_query($link, $sql);
	  
      mysqli_close($link);
    ?> 
  </body>
</html>