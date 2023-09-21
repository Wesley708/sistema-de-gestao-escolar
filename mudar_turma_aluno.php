<?php
   include 'conexao.php';

	
		 $usuario = $_POST["txt_usuario"];
		 $nivel = $_POST["txt_nivel"];
		 $id_aula = $_POST["txt_aula"];
		 $nome = $_POST["txt_nome"];

    if ($id_aula != ''){
		 $sql = mysql_query("UPDATE turmas SET nivel='$nivel' WHERE email_aluno = '$usuario' AND id_aula='$id_aula'");
	}else{
		 $sql = mysql_query ("INSERT INTO turmas (nome_aluno,nivel,email_aluno)
  		VALUES ('$nome','$nivel','$usuario')");	
	}
           
	
	header('Location: listar_aluno.php');
              
?>
