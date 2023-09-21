

    <?php

include 'conexao.php';
$logado = $_SESSION['usuario'];


	$sql = mysql_query("SELECT DISTINCT nivel FROM Turmas WHERE email_professor like '$logado'");


 
?>

<div id="menu">
  
  <h2 class="d-flex justify-content-center mt-3 mb-1 text-center text-dark tituloMenu">Menu Professor</h2>
  
        <?php
          while($linha =  mysql_fetch_assoc($sql)) {
        ?>
  <div id="content">
        <a href="turma_professor.php?turma=<?php echo $linha['nivel']; ?>" class="list-group-item list-group-item-action mt-2 ms-1 btn btn-primary text-center" target="principal"><?php echo $linha['nivel']; ?></a>
  </div>
  
        <?php  }
  
        ?>
</div>

			
