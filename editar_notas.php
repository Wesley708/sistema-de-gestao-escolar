<?php
include 'conexao.php';
session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    } 
    $logado = $_SESSION['usuario'];

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
<?php Include 'menu_professor.php'; ?>

	<div id="largura">



<h2 class="tituloMenu">Trocar turma do aluno</h2>
<form name="form1" method="POST">
Aluno:<br><input type="text" id="input" name="txt_usuario" value="<?php if (isset($_GET['usuario'])) echo $_GET['usuario'] ?>"readonly><br>
Nota um:<br><input type="text" name="txt_p1" id="input" value="<?php if (isset($_GET['p1'])) echo $_GET['p1'] ?>"><br>
Nota dois:<br><input type="text"  name="txt_p2" id="input" value="<?php if (isset($_GET['p2'])) echo $_GET['p2'] ?>"><br>
Trabalho:<br><input type="text"  name="txt_trabalho" id="input" value="<?php if (isset($_GET['trabalho'])) echo $_GET['trabalho'] ?>"><br>
<br>


<INPUT TYPE="submit" name="bt_editar" VALUE="ALTERAR" class="botao" id="input"  onClick="document.form1.action='mudar_nota.php'">
</div></div>

</body>
</html>
