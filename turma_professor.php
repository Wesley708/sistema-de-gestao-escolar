<?php

include 'conexao.php';
session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];





$nivel = $_SESSION['nivel'];



if((!isset($_GET['turma'])==true)){
	$turma = $nivel;
}else{
	$turma = $_GET['turma'];
}
	$sql2 = mysql_query("select * from turmas where (email_aluno != ' ') and nivel like  '$turma' order by nome_aluno asc");


 
?>
<html>

<link rel="icon" href="Logo.png" type="image/gif" sizes="32x32">
        
        <title>Gestao Escolar</title>
	
<link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<body>	


<body>	  
<body>	  
<?php Include 'navbar.php'; ?>
<div id="container">
<?php Include 'menu_professor.php';?>


<div id="largura">
<center>
<h2 class="tituloMenu">Lista de Alunos</h2>
	<form name="form2" method="post">
	
	<table border="1" align="center">
	
				<tr>
				<th><h3>Nome</h3></th>
				<th><h3>Turma</h3></th>
				<th><h3>Prova 1</h3></th>
				<th><h3>Prova 2</h3></th>
				<th><h3>Trabalho</h3></th>
				<th><h3>Media</h3></th>
				<th><h3>Alterar</h3></th>
	
	
				</tr>
				<tr>
	
				<?php
					while($linha = mysql_fetch_assoc($sql2)) {
	
	
				?>
				<td align="center"><?php echo $linha['nome_aluno']; ?></td>
				<td align="center"><?php echo $linha['nivel']; ?></td>	
				<td align="center"><?php echo $linha['nota_um']; ?></td>	
				<td align="center"><?php echo $linha['nota_dois'] ?></td>	
				<td align="center"><?php echo $linha['nota_tres'] ?></td>	
				<td align="center"><?php echo $linha['media']; ?></td>

				<td><a href="editar_notas.php?p1=<?php echo $linha['nota_um']; ?>&p2=<?php echo $linha['nota_dois']; ?>&trabalho=<?php echo $linha['nota_tres']; ?>&usuario=<?php echo $linha['nome_aluno']; ?>"><img src='edicao_usuario.png'></a></td>	
			   <tr>
	
				<?php  }
	
				?>
	</table>
	<br><br>
	
	
	</form>
</center>
			</div>
		</div>
</body>
</html>