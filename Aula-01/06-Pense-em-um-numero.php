<?php
	$x = 1000;
	$resultado = ((($x*2)+10)/2)-$x;
?>
<!DOCTYPE HTML>
<html>
	<head>
	   <meta charset="utf-8">
	  <title>Pense num numero.</title>
	</head>
	<body>
	  <hr>
	  <h1>O resultado sempre será 5</h1>
	  <h2>Pense num numero, Multiplique por 2; agora some com 10; Agora divida por 2.<br>
	  	Com o valor faça (-) menos o numero que vc <b>pensou</b>.
	  </h2>
	  <hr>
	  	<h2> O Resultado eh:
	  		<?php echo $resultado ?>
	  		</h2>
	</body>
</html>