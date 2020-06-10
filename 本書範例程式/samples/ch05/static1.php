<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      function Add()
      {
        $Result = 0;				//宣告區域變數Result (初始值為0)
		$Result++;					//將區域變數Result的值遞增1
        echo $Result.'<br>'; 		//在網頁上顯示區域變數Result的值
      } 
      Add();						//呼叫函式
      Add();						//呼叫函式
    ?>
  </body>
</html>
