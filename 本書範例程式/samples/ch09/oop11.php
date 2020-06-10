<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      abstract class Payroll
      {
        public $EmpName;
        abstract public function Payment($Hours, $PayRate);
      }
      class BonusPayroll extends Payroll
      {
        public function Payment($Hours, $PayRate)	
        {
          return $Hours * $PayRate + 5000;
        }
      }
	  $Obj = new BonusPayroll();
      echo '加上獎金之後的薪資為'.$Obj->Payment(100, 80).'<br>';
    ?>
  </body>
</html> 
