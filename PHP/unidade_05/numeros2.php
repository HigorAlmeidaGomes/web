<?php
    $salario = 800;
    $gasolina = 2.49;
    $nome = "Higor ";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
             echo "O $salario é número ? " . is_numeric($salario) . "</br>";
		         echo "O $gasolina é número ? " . is_numeric($salario) . "</br>";
		             echo "O $nome é número ? " . is_numeric($nome) . "</br></br>";

            // testar se é inteiro
		           echo "O $salario é um inteiro ? " . is_int($salario) . "</br>";
						echo "O $gasolina é um inteiro ? " . is_int ($salario) . "</br>";
							echo "O $nome é um inteiro ? " . is_string($nome) . "</br></br>";


            // testar se é float
		           echo "O $salario é um Float ? " . is_float($salario) . "</br>";
						echo "O $gasolina é um Float ? " . is_float ($salario) . "</br>";
							echo "O $nome é um Float ? " . is_float($nome) . "</br></br>";
		
		               echo  round ($gasolina) . "</br>";
        ?>
        
        
    </body>
</html>