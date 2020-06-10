<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      class Employee
      {
        public $Name; 					//定義名稱為Name的屬性以存放員工的名字
        function __construct($Str) 		//透過建構函式指派員工的名字
        {
          $this->Name = $Str; 
        }        
      }
      $Obj1 = new Employee('小紅豆');	//令$Obj1指向Name屬性為 '小紅豆' 的物件
      $Obj2 = new Employee('小紅豆');	//令$Obj2指向Name屬性為 '小紅豆' 的另一物件
      $Obj3 = $Obj1;					//令$Obj3指向$Obj1所指向的物件
      if ($Obj2 == $Obj1) echo '$Obj2的成員與值均和$Obj1相同'.'<br>';
      else echo '$Obj2的成員或値和$Obj1不同'.'<br>';
      if ($Obj2 === $Obj1) echo '$Obj2和$Obj1指向相同的物件'.'<br>';
      else echo '$Obj2和$Obj1指向不同的物件'.'<br>';
      if ($Obj3 === $Obj1) echo '$Obj3和$Obj1指向相同的物件'.'<br>';
      else echo '$Obj3和$Obj1指向不同的物件'.'<br>';
    ?>
  </body>
</html>
