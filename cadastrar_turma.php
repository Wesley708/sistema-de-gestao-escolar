<?php
    Include 'conexao.php';
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];
    
?>

<!doctype html>
<html lang="en">
    <head>

<!-- Favicon -->
<link rel="icon" href="Logo.png" type="image/gif" sizes="32x32">
        
        <title>Gestao Escolar</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />


        <title>Title of the site</title>
    </head>
	<body class="">
  <?php Include 'navbar.php'; ?>
	  <div id="container">
    <?php Include 'menu_adm.php'; ?>
    <div id="largura">
    <div id="dentro">
        <h2 class="tituloMenu">Criar nova turma</h2>
        <form class="form-control mt-2" name="form1" method="post" id="formulario">
          <div class="cadastrocontent">
                        <label for="nome_turma" class="form-label">Nome da nova Turma: </label>
                        <input type="text" name="txt_nome_turma" size="30" id="input"class="form-control" required >
                    </div>
        
                    <p>
          <input type="submit" value="Cadastrar" class="botao" id="input" name="submit" onclick="document.form1.action='criar_turma.php'" class="btn btn-primary mt-2">
          </p>
          </form>
</div>
      </div>
        
      
      
    </div>
  </body>
</html>