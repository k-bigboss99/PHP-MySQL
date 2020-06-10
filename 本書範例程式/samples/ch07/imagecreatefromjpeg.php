<?php
  //讀取外部圖形
  $im = imagecreatefromjpeg("images/osaka7.jpg");
  $textcolor = imagecolorallocate($im, 0, 0, 0);  
  //在圖形中加入拍攝者資訊
  imagestring($im, 5, 380, 270, "Photo By Jean", $textcolor);
  //輸出圖形
  header("Content-type: image/png");
  imagepng($im);   
  //釋放圖形佔用的記憶體
  imagedestroy($im);
?>