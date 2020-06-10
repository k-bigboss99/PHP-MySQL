<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php if (!isset($_POST["Send"])) { ?>
    <form method="post" action="calculate2.php">
      <input type="hidden" name="Send" value="true">
      <fieldset> 
        <legend>個人資料</legend>        
        請輸入姓名&nbsp;&nbsp;：<input type="text" name="UserName" size="30"><br>
        請輸入e-mail：<input type="text" name="UserMail" size="30"><br>
      </fieldset><br>
      <fieldset>
        <legend>計算存款本利和</legend> 
        請輸入本金（例如500000）：<input type="text" name="UserCache" size="20"><br>
        請輸入年利率（例如&nbsp;0.05）：<input type="text" name="UserRate" size="20"><br>
        請輸入月數（例如&nbsp;11）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<input type="text" name="UserMonth" size="20"><br>
      </fieldset><br> 
      <input type="submit" value="開始計算">   
      <input type="reset" value="重新輸入">                     
    </form>
    <?php 
      }
      else
      {
        $Name = $_POST["UserName"];
        $Rate = $_POST["UserRate"]; 
        $Cache = $_POST["UserCache"];
        $Month = $_POST["UserMonth"];
        $Total = $Cache + $Cache * $Rate * $Month / 12;
    ?> 
    <p><i><b><?php echo $Name; ?></b></i>，您好！</p>
    當本金為<?php echo $Cache; ?>、
    年利率為<?php echo $Rate; ?>、
    月數為<?php echo $Month; ?>時，
    本利和將為<i><b><?php echo $Total; ?></b></i>。
    <?php } ?>
  </body> 
</html>