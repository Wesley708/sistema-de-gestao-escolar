<?php

include 'conexao.php';
$usuario = $_SESSION['usuario'];
$tipo = $_SESSION['tipo'];


$sql = mysql_query("select * from turmas where $tipo like  '$usuario' ");
?>


 
<?php
while($linha = mysql_fetch_assoc($sql)) {
?>


<?php
$_SESSION['nivel'] = $linha['nivel'];
?>

<?php  } 
			  
?>






