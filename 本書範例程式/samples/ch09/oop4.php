<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
	  class Employee
      {
        public $Name;
		function __construct($Str) 
        {
          $this->Name = $Str;
          echo '已經建立名字為'.$this->Name.'的物件！';		  
        }        
      }
      $Obj = new Employee('小紅豆');	  
    ?>
  </body>
</html>
