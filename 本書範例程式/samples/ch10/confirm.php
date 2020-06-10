<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $Name = $_POST["UserName"];
      $Mail = $_POST["UserMail"];
      switch($_POST["UserAge"])
      {
        case "Age1":
          $Age = "未滿20歲";
          break;
        case "Age2":
          $Age = "20~29";
          break;
        case "Age3":
          $Age = "30~39";
          break;
        case "Age4":
          $Age = "40~49";
          break;
        case "Age5":
          $Age = "50歲以上";
      }
      $Phone = $_POST["UserPhone"];
      $Trouble = $_POST["UserTrouble"];
      $Number = $_POST["UserNumber"];
    ?>
    <p><i><?php echo $Name; ?></i>，您好！您輸入的資料如下：</p>
      電子郵件地址：<?php echo $Mail; ?><br>
      年齡：<?php echo $Age; ?><br>
      曾經使用過的手機廠牌：<?php foreach($Phone as $Value) echo $Value.'&nbsp;'; ?><br>
      使用手機時最常碰到的問題：<?php echo $Trouble; ?><br>
      使用過哪些電信業者的門號：<?php foreach($Number as $Value) echo $Value.'&nbsp;'; ?>
  </body>
</html>