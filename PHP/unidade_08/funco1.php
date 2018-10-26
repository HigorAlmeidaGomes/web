<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
	<?php 
	         function retornaDiaria(){
				 $salario = 9110;
				 $diaria = number_format ($salario/30,2);
				 return $diaria;
			 }
	        echo  retornaDiaria();
	?>

    <body>
    </body>
</html>