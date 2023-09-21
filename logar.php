<?php 
session_start();
Include 'conexao.php';
$email = $_POST ["txt_email"];
$senha = $_POST ["txt_senha"];
$radio = $_POST ["radio"];
$aluno = "aluno";
$professor = "professor";
$adm = "ADM";


   if($radio == $aluno){

    $sql = mysql_query ("select * from alunos where
        (email='$email')
        and senha_aluno='$senha'");

if (mysql_num_rows($sql) > 0) {

    
    $_SESSION['usuario'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipo'] = 'email_aluno';
    include 'nivel.php';
    
    header('Location: notas.php');


    }	
else {

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.html');

    }

    }elseif($radio == $professor){

        $sql = mysql_query ("select * from professores where
        (email='$email')
        and senha_professor='$senha'");
    
        
if (mysql_num_rows($sql) > 0) {
	
    $_SESSION['usuario'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipo'] = 'email_professor';
    include 'nivel.php';

    header('Location: turma_professor.php');    
   
    }	
else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.html');
      }
        
    }elseif($radio == $adm){

        $sql = mysql_query ("select * from adm where
        (email='$email')
        and senha_adm='$senha'");

    if (mysql_num_rows($sql) > 0) {
		
    $_SESSION['usuario'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: listar_aluno.php');

    }	
else {

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.html');
    
      }    
    }
?>