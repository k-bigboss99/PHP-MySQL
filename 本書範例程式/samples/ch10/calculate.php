<?php
  $Name = $_POST["UserName"];
  $Rate = $_POST["UserRate"]; 
  $Cache = $_POST["UserCache"];
  $Month = $_POST["UserMonth"];
  $Total = $Cache + $Cache * $Rate * $Month / 12;
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p><i><b><?php echo $Name; ?></b></i>，您好！</p>
    當本金為<?php echo $Cache; ?>、
    年利率為<?php echo $Rate; ?>、
    月數為<?php echo $Month; ?>時，
    本利和將為<i><b><?php echo $Total; ?></b></i>。
    <p><a href="bank.html">回上頁</a></p>
  </body> 
</html>