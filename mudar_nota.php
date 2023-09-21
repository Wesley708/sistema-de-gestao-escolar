<?php
   include 'conexao.php';

  
		 $usuario = $_POST["txt_usuario"];
		   $Pa = $_POST ["txt_p1"];
         $P1 = number_format($Pa,1,'.','');
         $Pb = $_POST["txt_p2"];
         $P2 = number_format($Pb,1,'.','');
         $Pc = $_POST["txt_trabalho"];
         $P3 = number_format($Pc,1,'.','');
         $calculo = ($P1 + $P2 + $P3)/3;
         $media = number_format($calculo,1,'.','');

		
		      $sql =mysql_query ("update turmas set nota_um='$P1', nota_dois='$P2', nota_tres='$P3', media='$media' where nome_aluno ='$usuario'") ; 

           

          header('Location: turma_professor.php');
?>
