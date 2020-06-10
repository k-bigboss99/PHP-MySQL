<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      class Payroll
      {
        public $Name;
        public function Payment($Hours, $PayRate)
        {
          return $Hours * $PayRate;
        } 
      }
      class BonusPayroll extends Payroll
      {
        public function Payment($Hours, $PayRate)		//覆蓋父類別的方法
        {
          return $Hours * $PayRate + 5000;
        }
      }
      $Obj1 = new Payroll();
	  $Obj2 = new BonusPayroll();
      echo '尚未加上獎金的薪資為'.$Obj1->Payment(100, 80).'<br>';
      echo '加上獎金之後的薪資為'.$Obj2->Payment(100, 80).'<br>';
    ?>
  </body>
</html>