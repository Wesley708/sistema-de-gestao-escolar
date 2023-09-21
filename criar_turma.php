<?php 
Include 'conexao.php';

session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];


$turma = $_POST ["txt_nome_turma"];
$sql = mysql_query ("SELECT * FROM turmas WHERE
                     nivel='$turma'");


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



<?php
    if (mysql_num_rows($sql) > 0) {
		echo "<h2 class='aviso'>Turma ja cadastrada</h2>";
	} 
	else {   
	
	$sql = mysql_query ("INSERT INTO turmas (nivel)
						   VALUES ('$turma')");
		echo "<h2 class='aviso'>Turma cadastrada com sucesso!</h2>";
	}
?>


</div></div>

</body>
</html>