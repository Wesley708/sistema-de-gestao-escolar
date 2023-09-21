<?php
include 'conexao.php';

session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];




	$sql = mysql_query("SELECT DISTINCT nivel FROM turmas ORDER BY nivel ASC");






if(isset($_GET['apagar'])){
	$sql = mysql_query("DELETE FROM turmas WHERE nivel=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "TURMA EXCLUIDA COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href=\"listar_turma.php\">VOLTAR</a>"; 
	 echo "<hr>";
	return false;
	
}
 
?>

<html>

<!-- Favicon -->
<link rel="icon" href="Logo.png" type="image/gif" sizes="32x32">
        
        <title>Gestao Escolar</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<body>	  
<?php Include 'navbar.php'; ?>
<div id="container">
<?php Include 'menu_adm.php'; ?>
<div id="largura">
<center>
	
<h2 class="tituloMenu">Lista de Turmas</h2>
	<table border="1" align="center">
	
				<tr>
				<th><h3>TURMA</h3></th>
				<th><h3>APAGAR</h3></th>
	
				</tr>
				<tr>
	
				<?php
					while($linha = mysql_fetch_assoc($sql)) {
				?>
				<td align="center"><?php echo $linha['nivel']; ?></td>
	
			   <td><a href="apagar_turma.php?apagar='<?php echo $linha['nivel']; ?>'"><img src='deletar_usuario.png'></a></td>
	
			   <tr>
	
				<?php  }
	
				?>
	
	
	</table>
</center>

				</div>
				</div>
			 
</body>
</html>