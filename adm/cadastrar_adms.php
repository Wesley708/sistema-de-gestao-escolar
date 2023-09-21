<!-- 
1 - Incluido email no cadastro 
2 - corrigido acentuação
3 - Alterado texto que estava todo maiúsculo

-->
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

        <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />



      
        <title></title>
    </head>
    <body class="container">
      <?php Include '../navbar.php'; ?>
        <div id="container">
            <?php Include '../menu_adm.php'; ?>
            <div id="largura">
                <h2 class="tituloMenu">Cadastrar Administrador</h2>
                    <form class="form-control mt-2" name="form1" method="post" id="formulario">                       
                        <div class="mb-3">
                            <label for="nome_adm" class="form-label">Nome Completo:................ </label>
                                        <input type="text" name="txt_nome_adm" size="30" id="input" id="nome_adm"class="form-control"  >
                                        </div>
                        
                                        <div class="mb-3">
                        <label for="nascimento_adm" class="form-label">Data de nascimento:......... </label>
                        <input type="date" name="txt_nascimento_adm" size="30" id="input" id="nascimento_adm"class="form-control" required >
                        </div>
                        
                                        <div class="mb-3">
                                        <label for="cpf_adm" class="form-label">CPF:.......................................... </label>
                                        <input type="number" name="txt_cpf_adm" size="30" id="input" id="cpf_adm"class="form-control" required >
                                        </div>
                        
                                        <div class="mb-3">
                                        <label for="endereco" class="form-label">Endereço:............................... </label>
                                        <input type="text" name="txt_endereco" size="30" id="input" id="endereco"class="form-control" required >
                                        </div>
                        
                                        <div class="mb-3">
                                        <label for="telefone" class="form-label">Telefone:................................. </label>
                                        <input type="number" name="txt_telefone" size="30" id="input" id="telefone"class="form-control" required >
                                        </div>
                        
                                <div class="mb-3">
                                        <label for="email" class="form-label">E-mail:.................................... </label>
                                        <input type="text" name="txt_email" size="30" id="input" id="email"class="form-control" required>
                                        </div>
                        
                                <div class="mb-3">
                                        <label for="senha_adm" class="form-label"> Senha:.................................... </label>
                                        <input type="password" name="txt_senha_adm" size="30" id="input" id="senha_adm"class="form-control"  >
                                        </div>
                        
                                        <input type="submit" value="Cadastrar" class="botao" id="input" name="submit" onclick="document.form1.action='cadastrar_adm.php'" class="btn btn-primary mt-2">
                        
                                      </form>
                      </div>
                      
                      
                      
                      
                      
                    </div>
  </body>
</html>