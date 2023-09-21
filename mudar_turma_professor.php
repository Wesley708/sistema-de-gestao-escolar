<?php
	include 'conexao.php';

		$usuario = $_POST["txt_usuario"];
		$nivel = $_POST["txt_nivel"];
		$id_aula = $_POST["txt_aula"];

	

		if ($id_aula != ''){

			$sql = mysql_query("UPDATE turmas SET nivel='$nivel' WHERE email_professor = '$usuario' AND id_aula='$id_aula'");
		 }else{
			$sql = mysql_query ("INSERT INTO turmas (nivel,email_professor)
  			VALUES ('$nivel','$usuario')");		 
	     }


           

             header('Location: listar_professor.php');
?>
