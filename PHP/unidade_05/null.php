<?php 
    $nome =null;
    $endereco = null;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
     <?php 
		if(is_null($nome) && is_null($endereco)){
			echo"Variavel de valor nulo ! ";
		} else{
			echo"Variavel com valor " ;		
		}
		?>
		
    </body>
</html>