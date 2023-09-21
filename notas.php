<?php
include 'conexao.php';
//echo '<h1>Texto</h1>';
session_start();

if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('Location: login.php');
} 
$logado = $_SESSION['usuario'];



$usuario = $_SESSION['usuario'];

	$sql = mysql_query("select * from turmas where email_aluno like '$usuario' order by nome_aluno asc");
 
?>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<body>	  

<?php Include 'navbar.php'; ?>
<div id="container">
<?php Include 'menu_aluno.php'; ?>
	
	
	<div id="largura">
	<center>
		<h2 class="tituloMenu">Lista de Professores</h2>


<form name="form2" method="post">

<table border="1" align="center">
		    
            <th><h3>Nome</h3></th>
			<th><h3>Turma</h3></th>
            <th><h3>Prova 1</h3></th>
			<th><h3>Prova 2</h3></th>
			<th><h3>Trabalho</h3></th>
            <th><h3>Media</h3></th>

			
			
			</tr>
			<tr>
			
			<?php
				while($linha = mysql_fetch_assoc($sql)) {

            
			?>
            <td align="center"><?php echo $linha['nome_aluno']; ?></td>
			<td align="center"><?php echo $linha['nivel']; ?></td>
			


			<td align="center"><?php echo $linha['nota_um']; ?></td>
			
			<td align="center"><?php echo $linha['nota_dois'] ?></td>
            
			<td align="center"><?php echo $linha['nota_tres'] ?></td>


			<td align="center"><?php echo $linha['media']; ?></td> 
	       
		   
	       <tr>
            			
			<?php  } 
			  
			?>
</table>
<br><br>


</form>
		</div>
	</div>
</body>
</html>