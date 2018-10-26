<?php 
    $salario = 800;
    $meses   = 13;
 //   $_total = $salario * $meses / 2;  
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
		   // echo "O total do seu salário é ". $_total;
		     echo "Trismestre" .  $salario * $meses."</br>";
		        echo "Quinzena" .  $salario / 2 . "</br>";
		    

            // Exponencial
		        echo "Exponencial: ". pow(8,2) . "</br>"; 

            // Raiz Quadrada
		         echo "Raiz Quarada: ". sqrt(36) . "</br>";

            // Randômico Generica
                 echo "Randômico: " . rand (1,10) . "</br>";
            // Randômico entre um intervalo

            // Valor absoluto
               echo "Absoluto" . abs(-210);
        ?>
    </body>
</html>