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


        <style>
            body{
                background-color:rgb(250, 250, 250);
                text-align: center;
                align-items: center;
                color:rgb(22, 33, 70);
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
            }
            #formulario{
                background-color:rgb(250, 250, 250);
                border: none;
                align-items: center;
                text-align: center;
            }
            #input{
                border: solid 1px rgb(22, 33, 70);
                border-radius: 5px;
                line-height:15px;
                padding: 5px 5px;
                margin-bottom: 10px;  
                width: 250px;          
                text-align: center;  
                font-family: 'Poppins', sans-serif;  
            }
            h2{
                font-family: 'Poppins', sans-serif;
                font-size: 40px;
                text-align: center;
                color: rgb(22, 33, 70);
            }
            label{
                align-items: start;
                font-size: 18px;
                text-align:start;
                color:rgb(22, 33, 70);
            }
            .botao{
                height: 40px;
                width: 500px;
                background-color:rgb(33, 49, 102);
                font-size: 25px;
                color: white;
                margin-top: 15px;
            }
            .botao:hover{
                background-color:rgb(92, 10, 10);
                height: 40px;
                width: 500px;
            }
            cover{

            }
            
        </style>
        <title>Title of the site</title>
    </head>

    
    <body class="container">

     
            <h2 class="text-center mt-2">Cadastrar Aluno</h2>
                <i class="fas fa-cloud"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-car"></i>
                <i class="fas fa-file"></i>
                <i class="fas fa-bars"></i>
            <form class="form-control mt-2" name="form1" method="post" id="formulario">
                              
            <div>
                <div class="mb-3">
                    <label for="nome_aluno" class="form-label">Nome Completo:............. </label>
                    <input type="text" name="txt_nome_aluno" size="30" id="input" id="nome_aluno"class="form-control" required  >
                </div>
                <div class="mb-3">
                    <label for="nascimento_aluno" class="form-label">Data de Nascimento:...... </label>
                    <input type="date" name="txt_nascimento_aluno" size="30" id="input" id="nascimento_aluno"class="form-control" required >
                </div>
                
                <div class="mb-3">
                    <label for="cpf_aluno" class="form-label">CPF:...................................... </label>
                    <input type="text" name="txt_cpf_aluno" size="30" id="input" id="cpf_aluno" class="form-control" required >
                </div>
                
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:........................... </label>
                    <input type="number" name="txt_telefone" size="30" id="input" id="telefone" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:......................... </label>
                    <input type="text" name="txt_endereco" size="30" id="input" id="endereco" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:.............................. </label>
                    <input type="text" name="txt_email" size="30" id="input" id="email" class="form-control" required >
                </div>
                
                <div class="mb-3">
                    <label for="responsavel" class="form-label">Pai ou Mãe:..................... </label>
                    <input type="text" name="txt_responsavel" size="30" id="input" id="responsavel" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="senha_aluno" class="form-label">Senha:............................. </label>
                    <input type="password" name="txt_senha_aluno" size="30" id="input" id="senha_aluno"class="form-control" required >
                </div>
                <div>
                    <label for="turma" class="form-label">Turma:................................ </label>
                    <select id="input" id="turma" name="txt_nivel" required>
                        <?php Include 'listar_todas_turmas.php'; ?>
                    </select>
                </div>
                    <div>
                        
                        <input type="submit" value="Cadastrar" class="botao" id="input" name="submit" onclick="document.form1.action='cadastrar_aluno.php'" class="btn btn-primary mt-2">
                        <p></p>
                    </div>
            </div>
 
            </form>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="./assets/css/script.js"></script>
  </body>
  </html>