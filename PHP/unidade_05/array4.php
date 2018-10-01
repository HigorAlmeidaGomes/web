<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		<?php 
		    $salada = array("Maçâ","Abacate","Laranja");
		   
		   if ( in_array("Laranja",$salada) != null){
		    echo "Existe ! ". in_array("Pêra",$salada);
		   }
		   else {
			   echo "Não foi encontrado o elemento";
		   }
		?>
		
    </body>
</html>