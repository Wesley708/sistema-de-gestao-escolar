<!-- 
1 - Incluido email no cadastro 
2 - corrigido acentuação
3 - Alterado texto que estava todo maiúsculo

-->




<?php
    Include 'conexao.php';


    $nome_adm = $_POST ["txt_nome_adm"];
    $cpf_adm = $_POST ["txt_cpf_adm"];
    $nascimento_adm = $_POST ["txt_nascimento_adm"];
    $endereco = $_POST ["txt_endereco"];
    $telefone = $_POST ["txt_telefone"];
	$email = $_POST ["txt_email"];
    $senha_adm = $_POST ["txt_senha_adm"];
    
    $sql =mysql_query ("SELECT * FROM adm
                        WHERE email = '$email'");



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

        <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />



      
        <title></title>
    </head>
    <body class="container">
      <?php Include '../navbar.php'; ?>
        <div id="container">
            <?php Include '../menu_adm.php'; ?>
            <div id="largura">
                <h2 class="tituloMenu">Cadastrar Administrador</h2>
                
                <?php  

                    if (mysql_num_rows($sql) > 0) {
                        echo "<h2 class='aviso'>Administrador ja cadastrado!</h2>";
                    }else{
                        $sql=mysql_query ("INSERT INTO adm (nome_adm,cpf_adm,nascimento_adm,endereco,telefone,senha_adm,email) 
                        VALUES ('$nome_adm','$cpf_adm','$nascimento_adm','$endereco','$telefone','$senha_adm','$email')");
                
                        echo "<h2 class='aviso'>Administrador cadastrado com sucesso!</h2>";  
                    }

                ?>



            </div>
        </div>
  </body>
</html>