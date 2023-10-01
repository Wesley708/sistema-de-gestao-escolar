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

<!-- Favicon -->
<link rel="icon" href="Logo.png" type="image/gif" sizes="32x32">
        
        <title>Gestao Escolar</title>

	<body class="">
    <?php Include 'navbar.php'; ?>
    <div id="container">
        <?php Include 'menu_adm.php'; ?>
        <div id="largura">
                <div class="dentro">
                    <h2 class="tituloMenu">Cadastrar Professor</h2>
                    <form class="cadastro" id="formulario" name="form1" method="post">
                        <div class="cadastrocontent">
                        <label for="nome_professor" class="form-label">Nome do Professor:</label>
                        <input type="text" name="txt_nome_professor" size="30" id="input" id="nome_professor" xclass="form-control" required >
                    </div>
                        <div class="cadastrocontent">
                        <label for="nascimento_professor" class="form-label">Data de Nascimento:</label>
                        <input type="date" name="txt_nascimento_professor" size="30" id="input" id="nascimento_professor"class="form-control" required >
                    </div>
                    
                        <div class="cadastrocontent">
                        <label for="cpf_professor" class="form-label">CPF:</label>
                        <input type="text" name="txt_cpf_professor" size="30" id="input" id="cpf_professor"class="form-control" required >
                    </div>
                    
                        <div class="cadastrocontent">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" name="txt_endereco" size="30" id="input" id="endereco"class="form-control" required >
                    </div>
                    
                        <div class="cadastrocontent">
                        <label for="telefone" class="form-label">Telefone: </label>
                        <input type="text" name="txt_telefone" size="30" id="input" id="telefone"class="form-control" required >
                    </div>
                        <div class="cadastrocontent">
                        <label for="senha_professor" class="form-label">Senha: </label>
                        <input type="password" name="txt_senha_professor" size="30" id="input"id="senha_professor"class="form-control" required >
                    </div>
                    <div class="cadastrocontent">
                        <label for="email" class="form-label">E-mail: </label>
                        <input type="text" name="txt_email" size="30" id="input" id="email"class="form-control" required >
                    </div>
                    <div class="cadastrocontent">
                        <label for="turma" class="form-label">Turma:</label>
                        <select name="txt_nivel" id="input" required>
                            <?php Include 'listar_todas_turmas.php';?>
                        </select>
                    </div>
                    <p>
                        <input type="submit" class="botao" id="input"  value="Cadastrar" name="submit" onclick="document.form1.action='cadastrar_professor.php'" class="btn btn-primary mt-2">
                        </p>
                    
                        </form>
                </div>
            </div>
    </div>
  </body>
</html>