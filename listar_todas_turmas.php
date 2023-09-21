<?php

include 'conexao.php';

	$sql = mysql_query("SELECT DISTINCT nivel FROM Turmas WHERE nivel != '' ORDER BY nivel");

?>

<html>

<body>	  
<center>
	<br>

			
			<?php
				while($linha =  mysql_fetch_assoc($sql)) {
			?>

                <option value="<?php echo $linha['nivel']; ?>"><?php echo $linha['nivel']; ?></option>

			            			
			<?php  } 
			  
			?>

			
</body>
</html>