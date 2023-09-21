<?php

include 'conexao.php';
$logado = $_SESSION['usuario'];


	$sql = mysql_query("SELECT DISTINCT nivel FROM Turmas WHERE email_professor like '$logado'");


 
?>

<html>

<body>	  
<center>
	<br>

			
			<?php
				while($linha =  mysql_fetch_assoc($sql)) {
			?>

			<a href="turma_professor.php?nivel=<?php echo $linha['nivel']; ?>" class="list-group-item list-group-item-action mt-2 ms-1 btn btn-primary text-center" target="principal"><?php echo $linha['nivel']; ?></a>

			            			
			<?php  } 
			  
			?>

			
</body>
</html>