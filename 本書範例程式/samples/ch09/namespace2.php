<?php
  namespace my\name; 				//在全域空間內定義my\name命名空間
  use my\name as A;
  class MyClass {}					//在\my\name命名空間內定義MyClass類別
  function Myfunction() {}			//在\my\name命名空間內定義Myfunction函式
  const MYCONST = 1;				//在\my\name命名空間內定義MYCONST常數
  $X = new A\MyClass;				//建立MyClass類別的物件，寫成$X = new MyClass;亦可
  $Y = A\MYCONST;					//定義Y為常數MYCONST，寫成$Y = MYCONST;亦可
  echo $Y;							//顯示Y的値
?>

