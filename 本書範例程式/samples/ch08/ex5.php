<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      try
      {
        open_folder("C:\\book");									//�չ϶}�Ҥ��s�b����Ƨ�
      }
      catch(Error $ex)											//�����i�ಣ�ͪ��ҥ~
      {
        echo '���~�T���G'.$ex->getMessage().'<br>';		//��ܨҥ~�����~�T��
        echo '���~�N�X�G'.$ex->getCode().'<br>'; 			//��ܨҥ~�����~�N�X
        echo '�ɮ׸��|�G'.$ex->getFile().'<br>'; 			//��ܨҥ~���ɮ׸��|
        echo '���~��ơG'.$ex->getLine().'<br>'; 			//��ܨҥ~�����~���
      }

      function open_folder($folder)
      {
        if (file_exists($folder)) 										//�ˬd��Ƨ��O�_�s�b
          opendir($folder); 										//�O�N�[�H�}��
        //else
          //throw new Exception('���}�Ҫ���Ƨ����s�b');	//�_�h�Y�X�ҥ~
      } 
    ?>
  </body>
</html>
