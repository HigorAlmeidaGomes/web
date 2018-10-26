<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		<?php 
		$agenda = array(
		     "nome "=> "Higor",
			  "sobrenome" => "Almeida",
			   "salario" => 1000,
		);
		 foreach ($agenda as $atributo => $valor){
			 echo $atributo . ": ".$valor. "</br>";
		 }
		
		?>
    </body>
</html>