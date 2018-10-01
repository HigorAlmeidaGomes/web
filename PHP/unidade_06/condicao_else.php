<?php 
   $a=23;
   $b=23;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		
	<?php 
		if( $a > $b){
			echo "A e maior que B :";
		}else if ($a < $b){
			echo "B e maior que A ";
		}
		else{ 
			echo "A é B são iguais :";
		}
		
		?>
    </body>
</html>