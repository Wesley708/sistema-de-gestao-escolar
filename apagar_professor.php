<?php
include 'conexao.php';
session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];




	$sql = mysql_query("SELECT professores.*, turmas.nivel, turmas.id_aula FROM professores
					     LEFT JOIN turmas ON professores.email = turmas.email_professor ORDER BY professores.nome_professor ASC;");






 
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


<body>	  
<?php Include 'navbar.php'; ?>
<div id="container">
<?php Include 'menu_adm.php'; ?>
	
	
	<div id="largura">
	<center>
		<h2 class="tituloMenu">Lista de Professores</h2>
		<?php
			
if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from professores where email=". $_GET['apagar']);
	$sql = mysql_query("delete from turmas where email_professor=". $_GET['apagar']);
	$aluno = ($_GET['apagar']);
	echo "<h1 class='aviso'>Professor(a) $aluno excluido(a) com sucesso</h1>";

	
	return false;
		
}
?>
	</center>
	</div>
</div>
			 
</body>
</html>