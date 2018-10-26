<?php 
    $nome ="Teste1";
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
		if(isset($nome) && isset($endereco)){
			echo" a  variavel está Configurada ! ";
		} else{
			echo" a variavel não está  configurada ! " ;		
		}
		?>
		
    </body>
</html>