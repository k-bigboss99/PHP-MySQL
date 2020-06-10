<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      function Add()
      {
        static $Result = 0;			//使用static將Result宣告為靜態變數
        $Result ++;					//將靜態變數Result的值遞增1
        echo $Result.'<br>'; 		//在網頁上顯示靜態變數Result的值
      } 
      Add();						//呼叫函式
      Add();						//呼叫函式
    ?>
  </body>
</html>
