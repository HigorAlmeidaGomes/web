<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		<?php
	   $dia = "sabado";
		 if ( $dia == "sabado" || $dia == "domingo" ){
			 echo "Você está no seu dia de descanço! ";
		 }
		 else {
			 echo "Você está em um dia ultil para trabalho! ";
		 }
		
		?>
    </body>
</html>