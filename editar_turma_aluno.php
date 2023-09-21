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
<?php Include 'menu_adm.php'; ?>

	<div id="largura">



<h2 class="tituloMenu">Trocar turma do aluno</h2>

<form name="form1" method="POST">
Nome:<br><input type="text" name="txt_nome" value="<?php if (isset($_GET['nome'])) echo $_GET['nome'] ?>" id="input" readonly><br>
E-mail:<br><input type="text" name="txt_usuario" value="<?php if (isset($_GET['usuario'])) echo $_GET['usuario'] ?>" id="input" readonly><br>
Turma atual:<br><input type="text" name="txt_turma" value="<?php if (isset($_GET['nivel'])) echo $_GET['nivel'] ?>"readonly id="input" ><br>

Id_aula:<br><input type="text" name="txt_aula" value="<?php if (isset($_GET['id_aula'])) echo $_GET['id_aula'] ?>"readonly id="input" ><br>

Nova turma: <br>
<select name="txt_nivel" required  id="input">                    
                            <?php 
                Include 'listar_todas_turmas.php';
               ?>
                </select>

<br> <br>


<INPUT TYPE="submit" name="bt_editar" VALUE="ALTERAR" class="botao" id="input"  onClick="document.form1.action='mudar_turma_aluno.php'">

</div></div>

</body>
</html>