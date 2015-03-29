<?php
	$x = 500;
	$y = 100;
	$soma = $x+$y;
	$subtrai = $x-$y;
	$multiplicacao = $x*$y;
	$divide = $x/$y;
	$primeiroNome = " Joao";
	$segundoNome = " da Silva"
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
	  	<b>Os valores informados foram <?php echo 'X='.$x.' e Y='.$y; ?></b>
	  </p>
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
	  <p>
	  	Incrementando o valor de da Soma: <?php echo $soma++; ?>
	  </p>
	  <p>
	  	Adicionado 5 no valor de da Soma: <?php echo $soma+= 5; ?>
	  </p>
	  <p>
	  	Removendo  5 no valor de da Soma: <?php echo $soma-= 5; ?>
	  </p>
	  <hr>
	  	<h2>Concatenar variaveis</h2>
	  	<p>
	  		Seu nome completo é : <b><?php echo $primeiroNome.	$segundoNome; ?></b>.
	  	</p>
	   	<p>
	  		Completrando um valor na variavel : <b><?php echo $primeiroNome.= " da Silva"; ?></b>.
	  	</p>
	  <hr>
	</body>
</html>