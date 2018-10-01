<?php 
    $nome ="";
    $endereco = "Tes";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
     <?php 
		if(empty($nome) && empty($endereco)){
			echo"Variavel está vazia ! ";
		} else{
			echo"Variavel não está vazia! " ;		
		}
		?>
		
    </body>
</html>