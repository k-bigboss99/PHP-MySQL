<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $account = $_POST["account"];

  $name = $_POST["name"]; 
  $sex = $_POST["sex"];
  $year = $_POST["year"]; 
  $month = $_POST["month"]; 
  $day = $_POST["day"];

  //指定用來存放檔案的資料夾名稱及檔名
  $upload_dir =  "./upload files/";
  $upload_file = $upload_dir . $to = iconv("UTF-8", "Big5", $_FILES["myfile"]["name"]);

  //將上傳的檔案由暫存資料夾移至指定的資料夾
  if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_file))
  {
    echo "<strong>檔案上傳成功</strong><hr>";	
    
    //顯示檔案資訊		
    echo "檔案名稱：" . $_FILES["myfile"]["name"] . "<br>";	
    echo "暫存檔名：" . $_FILES["myfile"]["tmp_name"] . "<br>";
    echo "檔案大小：" . $_FILES["myfile"]["size"] . "Bytes<br>";
    echo "檔案類型：" . $_FILES["myfile"]["type"] . "<br>";						
    echo "<p><a href='JavaScript:history.back()'>繼續上傳</a></p>";
  }
  else
  {
    echo "檔案上傳失敗 (" . $_FILES["myfile"]["error"] . ")<br><br>";
    echo "<a href='javascript:history.back()'>重新上傳</a>";
  }


  //建立資料連接
  $link = create_connection();
			
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM users Where account = '$account'";
  $result = execute_sql($link, "member", $sql);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
		
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
		
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO users (account, password, name, sex, 
            year, month, day, telephone, cellphone, address,
            email, url, comment) VALUES ('$account', '$password', 
            '$name', '$sex', $year, $month, $day,'$upload_file')";

    $result = execute_sql($link, "member", $sql);
  }
	
  //關閉資料連接	
  mysqli_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>新增帳號成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center"><img src="Success.jpg">       
    <p align="center">恭喜您已經註冊成功了，您的資料如下：（請勿按重新整理鈕）<br>
      帳號：<font color="#FF0000"><?php echo $account ?></font><br>
      密碼：<font color="#FF0000"><?php echo $password ?></font><br>       
      請記下您的帳號及密碼，然後<a href="index.html">登入網站</a>。
    </p>
  </body>
</html>