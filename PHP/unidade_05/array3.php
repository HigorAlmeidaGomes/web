<?php 
    $lost = array(27,12,32,43,12,545,323);

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
		   <?php 
		      echo max ($lost) . "</br>";
		       echo min ($lost) . "</br>";
		          echo array_sum  ($lost) . "</br>";
		             sort ($lost) . "</br>";
		        		         

	?>
		<pre>
		   <?php 
		      print_r($lost);		
		   ?>
		
		</pre>
		
    </body>
</html>