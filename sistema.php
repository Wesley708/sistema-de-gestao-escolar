<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(8, 46, 46),rgb(73, 93, 107));
            color: white;
            
        }
        .box{
        position: absolute;
        top: 30%;
        left:50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0,0,0,0.9);
        padding: 30px;
        border-radius: 10px;
        text-align:center;
        }
        a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 15px;
        padding: 10px 20px;
        font-size: 20px;
        }
        a:hover{
        background-color: dodgerblue;
        }
    </style>
</head>
<body>
<div class="box" >    
<h1>Acessou o sistema</h1>
<br>
<a href="sair.php"> Sair</a>
<?php
echo "<h1> Bem Vindo $logado </h1>";
?>
</div>
</body>
</html>