<?php
      $fumante = false;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		<?php 
		    if( $fumante == true){
		    echo"Ele e uma pessoa fumante !".is_bool.$fumante;
			}
		    else {
				echo "Não é fumante ! ";
			}
		?>
    </body>
</html>