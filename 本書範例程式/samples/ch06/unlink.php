<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>	
  <body>
    <?php
      $filename = "myfile.txt";
      if (file_exists($filename))
      {
        unlink($filename);
	      echo "刪除檔案成功！";
      }
      else
      {
        echo "檔案不存在，刪除檔案失敗！";
      }
    ?>
  </body>
</html>