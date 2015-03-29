<?php
	$x = 500;
	$y = 100;
	$soma = $x+$y;
	$subtrai = $x-$y;
	$multiplicacao = $x*$y;
	$divide = $x/$y;
?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>04-Principais-Operadores</title>
	</head>
	<body>
	  <hr>
	  	<h1>Resultado das operaçoes</h1>
	  <hr>
	  <p>
	  		A soma é: <?php echo $soma;?>
	  </p>
	  <p>
	  		A Subtração é: <?php echo $subtrai;?>
	  </p>
	  <p>
	  		A Multiplicação é: <?php echo $multiplicacao;?>
	  </p>
	 	<p>
	  		A Divisão é: <?php echo $divide;?>
	  </p>
	  
	</body>
</html>